<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    //

    /**
     * todo Display a listing of the resource.
     */
    public function index()
    {
    
    }

    /**
     * todo  created resource in storage.
     */
    public function create(Request $request)
    {

    }

    /**
     * todo Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * todo Display the specified resource.
     */
    public function show(Request $request , Books $book)
    {

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
