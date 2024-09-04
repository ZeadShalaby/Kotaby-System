<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Traits\ImageTrait;
use App\Models\Departments;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use App\Traits\validator\ValidatorTrait;

class BooksController extends Controller
{
    use  ValidatorTrait , TestAuth , ImageTrait , MethodTrait;

    /**
     * todo Display a listing of the resource.
     */
    public function index()
    {

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
        //   $book->with('user')->load('media_one');
          return view('Auth.Books.show');
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
