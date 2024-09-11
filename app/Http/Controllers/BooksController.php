<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Reviews;
use App\Events\UserRole;
use App\Traits\ImageTrait;
use App\Events\BooksReport;
use App\Events\BookVieweer;
use App\Models\Departments;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Events\DownloadBooks;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Traits\validator\ValidatorTrait;

class BooksController extends Controller
{
    use ValidatorTrait, TestAuth, ImageTrait, MethodTrait;

    /**
     * todo Display a listing of the resource.
     *///? my books
    public function index()
    {
        $title = 'كتبي';
        $book = Books::where('user_id', auth()->user()->id)->with('media_one', 'user', 'department')->get();
        $books = $this->getBooks($book);
        return view('Auth.Books.common', compact('title', 'books'));
    }


    // todo book common page
    public function common()
    {
        $title = 'أفضل الكتب';
        $book = Books::orderBy('star', 'desc')->orderBy('view', 'desc')->with('media_one', 'department', 'user')->get();
        $books = $this->getBooks($book);
        return view('Auth.Books.common', compact('title', 'books'));
    }

    /**
     * todo  created resource in storage.
     */
    public function create()
    {

        $categories = Departments::all(); //? Fetch all categories
        return view('Auth.Books.add-book', compact('categories'));

    }

    /**
     * todo Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        try {
            // todo Add New Book //    
            $book = $request->all();
            $book['user_id'] = auth()->user()->id; //? Add user id>
            $book = Books::create($book);

            $pathCover = $this->saveimage($request->bookCover, 'images/books/img/');
            $pathFile = $this->savePdf($request->bookFile, 'images/books/pdf/');
            $this->AddmediaBook($book, $pathCover, $pathFile);

            event(new UserRole(auth()->user())); //? change type user for author
            return redirect('/my/books')->with('success', "تمت الاضافة بنجاح");
        } catch (\Exception $e) {
            return back()->with('error', "حدث خطأ غير متوقع: " . $e->getMessage());
        }
    }


    /**
     * todo Display the specified resource.
     */
    public function show(Request $request, Books $book)
    {
        $title = ' معلومات > كتاب >' . $book->title;
        $book->load('media_one', 'user', 'department');
        $book->stars = $book->getTypeStars();
        $reviews = Reviews::where('book_id', $book->id)->with('book')->get();
        return view('Auth.Books.show', compact('book', 'title', 'reviews'));
    }

    public function showpdf(Request $request, Books $book)
    {
        $title = ' معلومات > كتاب >';
        event(new BookVieweer($book));
        return view('PDF.show-pdf', compact('title'));
    }

    public function downloadpdf(Books $book)
    {
        try {
            $book->load('media_one');
            event(new DownloadBooks($book));
            //? Check and confirm the file path
            $filePath = public_path($book->media_one->pdf);

            //? Check if the file exists in the given path
            return response()->download($filePath, $book->title . '.pdf', [
                'Content-Type' => 'application/pdf',
            ]); //? Serve the file for download
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'الكتاب لا يحتوي على ملف PDF' . $e->getMessage());
        }
    }


    /**
     * todo Display the specified resource.
     */
    public function report(Books $book)
    {
        //
        event(new BooksReport($book));
        return back()->with('error', "Report Sent Success .");

    }

    /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(Books $book)
    {
        $book->load('user', 'department');
        $categories = Departments::all(); //? Fetch all categories
        return view('Auth.Books.edit', compact('book', 'categories'));
    }

    /**
     * todo Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Books $book)
    {
        try {
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            $book->update($data);
            if ($request->hasFile('bookCover') && $request->hasFile('bookFile')) {
                $pathCover = $this->saveImage($request->file('bookCover'), 'images/books/img/');
                $pathFile = $this->savePdf($request->file('bookFile'), 'images/books/pdf/');
                $this->AddmediaBook($book, $pathCover, $pathFile);
            }
            event(new UserRole(auth()->user()));
            return redirect('/my/books')->with('success', "تمت الإضافة بنجاح");
        } catch (\Exception $e) {
            return back()->with('error', "حدث خطأ غير متوقع: " . $e->getMessage());
        }
    }


    // todo autocompleteSearch by description
    public function autocompleteSearch(Request $request)
    {
        $pageTitle = 'Home';
        $filterResult = Books::where('title', 'LIKE', '%' . $request->get('query') . '%')
            ->orderBy('star', 'desc')->take(3)->get();
        return view('tweets.index', compact($filterResult));
    }

    /**
     * todo Remove the specified resource from storage.
     * 
     */
    public function destroy(Request $request, Books $book)
    {
        try {
            $book->delete();
            return redirect('/my/books')->with('success', "delete book Succcessfully");
        } catch (\Exception $e) {
            return redirect('/my/books')->with('error', "Some Thing Wrong" . $e->getmessage());
        }
    }
}
