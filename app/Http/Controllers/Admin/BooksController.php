<?php

namespace App\Http\Controllers\Admin;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    //

    public function reportindex()
    {
        $title = 'التقارير';
        $book = Books::reported()->with('media_one','department','user')->get();
        $books = $book->map(function ($book) {
            $book->stars = $book->getTypeStars();
            return $book;
        });
        return view('Admin.Books.report',compact('title','books'));
    }

    public function report(Request $request , Books $book)
    {
        // $report = Report::find($id);  
        $book->resetReportAt();
        return back()->with('success','تم الغاء التقرير بنجاح');    
    }


    /**
     * todo Remove the specified resource from storage.
     * !  Delete Forever
     */
    public function destroy(Request $request)
    {
        //
        $book = Books::reported()->find($request->book);
        if(!isset($book)){return back()->with('error','Some thing Wrong');}
        $book->forceDelete();
        return back()->with('success',"delete Book Succcessfully");
    }




}
