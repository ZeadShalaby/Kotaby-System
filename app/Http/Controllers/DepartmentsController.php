<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller
{
    //
    /**
     * todo Display a listing of the resource.
     */
    public function index()
    {
        $title = 'الاقسام';
        $departments = Departments::get()->load('media_one');
        return view('Auth.Departments.index',compact('title','departments'));
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
    public function show(Request $request , Departments $department)
    {
      $title = 'الاقسام >'.$department->code.'> كتب' ;
      $book = Books::where('dep_id', $department->id)->with('media_one','department','user')->get();
      $books = $book->map(function ($book) {
          $book->stars = $book->getTypeStars();
          return $book;
      });
      return view('Auth.Users.home',compact('title','books'));
    }

     /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(Request $request,Departments $department)
    {

    }

     /**
     * todo Update the specified resource in storage.
     */
    public function update(Request $request, Departments $department)
    {

    }

    // todo autocompleteSearch by description
    public function autocompleteSearch(Request $request)
    {
        $pageTitle = 'Department';
        $filterResult = Departments::where('name', 'LIKE', '%'.$request->get('query'). '%')
        ->orderBy('created_at', 'desc')->take(8)->get();
        return view('departments.index',compact($filterResult,$pageTitle));
    } 

    /**
     * todo Remove the specified resource from storage.
     * ! Soft Delete
     */
    public function destroy(Request $request,Departments $department)
    {

    }
}
