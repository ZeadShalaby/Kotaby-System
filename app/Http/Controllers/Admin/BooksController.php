<?php

namespace App\Http\Controllers\Admin;

use App\Models\Books;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    use MethodTrait;
    //

    public function reportindex()
    {
        $title = 'التقارير';
        $book = Books::reported()->with('media_one', 'report_one', 'department', 'user')->get();
        $books = $this->getBooks($book);
        return view('Admin.Books.report', compact('title', 'books'));
    }

    public function report(Books $book)
    {
        $book->resetReportAt($book->id);
        return back()->with('success', 'تم الغاء التقرير بنجاح');
    }

    /**
     * todo Remove the specified resource from storage.
     * !  Delete Forever
     */
    public function destroy(Request $request)
    {
        try {
            $book = Books::reported()->find($request->book);
            $book->forceDelete();
            return back()->with('success', "delete Book Succcessfully");
        } catch (\Exception $e) {
            return back()->with('error', 'Some thing Wrong');
        }
    }

}
