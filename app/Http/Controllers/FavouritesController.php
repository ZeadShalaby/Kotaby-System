<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Favourites;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavouritesController extends Controller
{
      /**
     * todo Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'مكتبتي';
        $books = Favourites::where('user_id',auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('tweets.fav',compact('title','books'));
    }

    //? my favourites
    public function myfav()
    {
        $title = 'مفضلتي';
        $books = Favourites::where('user_id', auth()->user()->id)
            ->with('book', 'user')
            ->get()
            ->map(function ($favourite) {
                // Update the stars and only return the book details
                $favourite->book->stars = $favourite->book->getTypeStars();
                return $favourite->book;
            });

        return view('Auth.Books.common',compact('title','books'));

    }


    /**
     * todo Store a newly created resource in storage.& delete
     */
    public function store(Request $request)
    {
        $check = Favourites::where('user_id',auth()->user()->id)->where("book_id",$request->book_id)->get();
        if(isset($check)&& $check->count()!=0){
            foreach($check as $item)
            $book = Favourites::find($item->id); 
            $book->delete();
            return back()->with('delete', "remove Fav Book Success"); }
            
        $formFields = Favourites::create([
            'user_id' => auth()->user()->id,
            'book_id' => $request->book_id,
        ]);

        return back()->with('success', "Save Book Success ."); 

    }


    
}
