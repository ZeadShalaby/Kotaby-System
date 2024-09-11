<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Departments;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller
{
    use MethodTrait;

    /**
     * todo Display a listing of the resource.
     */
    public function index()
    {
        $title = 'الاقسام';
        $departments = Departments::get()->load('media_one');
        return view('Auth.Departments.index', compact('title', 'departments'));
    }


    /**
     * todo Display the specified resource.
     */
    public function show(Request $request, Departments $department)
    {
        $title = 'الاقسام >' . $department->code . '> كتب';
        $book = Books::where('dep_id', $department->id)->with('media_one', 'department', 'user')->get();
        $books = $this->getBooks($book);
        return view('Auth.Users.home', compact('title', 'books'));
    }


    // todo autocompleteSearch by description
    public function autocompleteSearch(Request $request)
    {
        $pageTitle = 'Departments';
        $filterResult = Departments::where('name', 'LIKE', '%' . $request->get('query') . '%')
            ->orderBy('created_at', 'desc')->take(8)->get();
        return view('departments.index', compact($filterResult, $pageTitle));
    }

}
