<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Reviews;
use App\Models\Favourites;
use App\Traits\ImageTrait;
use App\Events\BooksReport;
use App\Events\BookVieweer;
use App\Models\Departments;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Events\DownloadBooks;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use App\Traits\validator\ValidatorTrait;

class BooksController extends Controller
{
    use  ValidatorTrait , TestAuth , ImageTrait , MethodTrait;

    /**
     * todo Display a listing of the resource.
     *///? my books
    public function index()
    {
        $title = 'كتبي';
        $book = Books::where('user_id',auth()->user()->id)->with('media_one','user','department')->get();
        $books = $book->map(function ($book) {
            $book->stars = $book->getTypeStars();
            return $book;
        });
        return view('Auth.Books.common',compact('title','books'));
    }


    // todo book common page
    public function common()
    {
        $title = 'أفضل الكتب';
        $book = Books::orderBy('star', 'desc')->orderBy('view', 'desc')->with('media_one','department','user')->get();
        $books = $book->map(function ($book) {
            $book->stars = $book->getTypeStars();
            return $book;
        });
        return view('Auth.Books.common',compact('title','books'));
    }

    /**
     * todo  created resource in storage.
     */
    public function create(Request $request)
    {
    
        $categories = Departments::all(); //? Fetch all categories
        return view('Auth.Books.add-book',compact('categories'));

    }

    /**
     * todo Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // ! valditaion
         $rules = $this->rulesAddBook();
         $validator = $this->validate($request,$rules);
         if($validator !== true){return back()->with('error', $validator);}

         // todo Register New Account //    
         $book = Books::create([
            'author_name' => $request->author_name,
            'title'       => $request->title,
            'user_id'     =>auth()->user()->id,
            'language'    => $request->language,
            'num_pages'   => $request->num_pages,
            'dep_id'      => $request->dep_id,
            'locations'   => $request->locations,
            'description' => $request->description,
        ]);

         $pathCover = $this->saveimage($request->bookCover , 'images/books/img/');
         $pathFile  = $this->savePdf($request->bookFile , 'images/books/pdf/');
         $this->AddmediaBook($book , $pathCover , $pathFile);

         if($book){
            return redirect('/home')->with('success', "تم الاضافة بنجاح");}
            else{return back()->with('error', "حدث خطأ ما الرجاء المحاولة مرة اخرى");}
    }

    

    /**
     * todo Display the specified resource.
     */
    public function show(Request $request , Books $book)
    {
          $title = ' معلومات > كتاب >'.$book->title ;
          $book->load('media_one', 'user', 'department');
          $book->stars = $book->getTypeStars();
          $reviews = Reviews::where('book_id', $book->id)->with('book')->get();
          return view('Auth.Books.show',compact('book','title','reviews'));
    }

    public function showpdf(Request $request,Books $book)
    {
        $title = ' معلومات > كتاب >';
        event(new BookVieweer($book));
        return view('PDF.show-pdf',compact('title'));
    }

    public function downloadpdf(Request $request, Books $book)
    {
        $book->load('media_one');
        event(new DownloadBooks($book));
        //? Check if the PDF exists
        if ($book->media_one && $book->media_one->pdf) {
            //? Check and confirm the file path
            $filePath = public_path($book->media_one->pdf);
    
            //? Check if the file exists in the given path
            if (file_exists($filePath)) {
                 return response()->download($filePath, $book->title . '.pdf', [
                    'Content-Type' => 'application/pdf',
                ]); //? Serve the file for download
            } else {
                return redirect()->back()->with('error', 'الملف غير موجود');
            }
        }

        return redirect()->back()->with('error', 'الكتاب لا يحتوي على ملف PDF');
    }
    
    

     /**
     * todo Display the specified resource.
     */
    public function report(Request $request , Books $book)
    {
        //
        event(new BooksReport($book));
        return back()->with('error', "Report Sent Success ."); 

    }

     /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(Request $request,Books $book)
    {

    }

     /**
     * todo Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {

    }

    // todo autocompleteSearch by description
    public function autocompleteSearch(Request $request)
    {
        $pageTitle = 'Home';
        $filterResult = Books::where('name', 'LIKE', '%'.$request->get('query'). '%')
        ->orderBy('star', 'desc')->take(3)->get();
        return view('tweets.index',compact($filterResult));
    
    } 

    /**
     * todo Remove the specified resource from storage.
     * ! Soft Delete
     */
    public function destroy(Request $request,Books $book)
    {

    }
}
