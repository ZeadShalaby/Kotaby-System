<?php

namespace App\Http\Controllers\Admin;

use App\Models\Books;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller
{
  
    /**
     * todo Display a listing of the resource.
     */
    public function index()
    {
        $title = 'الاقسام';
        $departments = Departments::get()->load('media_one');
        return view('Admin.Departments.index',compact('title','departments'));
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
      return view('Admin.Books.book-dep',compact('title','books'));
    }


        
    /**
     * todo Display the specified resource.
     */
    public function showDep(Request $request , Departments $department)
    {
      $title = 'الاقسام >'.$department->code.'> كتب' ;
      $department->load('media_one');
      return view('Admin.department.show',compact('title','department'));
    }


     /**
     * todo Remove the specified resource from storage.
     * ! Soft Delete
     */
    public function destroy(Request $request,Departments $department)
    {
        if(!isset($department)){return back()->with('error','Some thing Wrong');}
        $department->delete();
        return back()->with('success',"delete tweet Succcessfully");
    }                                     


    /**
     * todo restore index the specified resource from storage.
     */
    public function restoreindex()
    {
       $title = 'Trash';
       $department = Departments::onlyTrashed()->with('media_one')->orderBy('deleted_at', 'desc')->get();
       return view('Admin.Departments.Trash.trash',compact('department','title'));
      }

     /**
     * todo  restore the specified resource from storage.
     */
    public function restore(Request $request)
    {
       $department = Departments::withTrashed()->find($request->department);
       if(!isset($department)){return back()->with('error','Some thing Wrong');}
       $department->restore();
       return back()->with('success',"Restore Department Successfully .");
      
    }


    /**
     * todo Remove the specified resource from storage.
     * !  Delete Forever
     */
    public function destroyForce(Request $request)
    {
        //
        $department = Departments::withTrashed()->find($request->department);
        if(!isset($department)){return back()->with('error','Some thing Wrong');}
        $department->forceDelete();
        return back()->with('success',"delete department Succcessfully");
    }

}
