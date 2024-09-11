<?php

namespace App\Http\Controllers\Admin;

use App\Models\Books;
use App\Traits\ImageTrait;
use App\Models\Departments;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use App\Traits\validator\ValidatorTrait;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

class DepartmentsController extends Controller
{
    use TestAuth, ImageTrait, ValidatorTrait, MethodTrait;
    /**
     * todo Display a listing of the resource.
     */
    public function index()
    {
        $title = 'الاقسام';
        $departments = Departments::get()->load('media_one');
        return view('Admin.Departments.index', compact('title', 'departments'));
    }


    /**
     * todo Display the specified resource.
     */
    public function show(Request $request, Departments $department)
    {
        $title = 'الاقسام >' . $department->code . '> كتب';
        $book = Books::where('dep_id', $department->id)->with('media_one', 'department', 'user')->get();
        $books = $this->getBooks($book);

        return view('Admin.Books.book-dep', compact('title', 'books'));
    }

    /**
     * todo  created resource in storage.
     */
    public function create(Request $request)
    {

        return view('Admin.Departments.store');

    }

    /** 
     * todo Store a newly created Department 
     **/
    public function store(StoreDepartmentRequest $request)
    {
        try {
            $departments = Departments::create($request->all());
            $path = $this->saveimage($request->img, 'images/department/img/');
            $this->Addmedia($departments, $path);
            return redirect()->back()->with('success', "تم الاضافة بنجاح");
        } catch (\Exception $e) {
            return back()->with('error', "حدث خطأ ما الرجاء المحاولة مرة اخرى" . $e->getMessage());
        }
    }

    /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(Request $request, Departments $department)
    {
        $department->load('media_one');
        return view('Admin.Departments.edit', compact('department'));
    }

    /**
     * todo Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Departments $department)
    {
        //
        try {
            $department->update($request->all());
            return redirect()->route('admin.dep.show', $department->id)->with('success', 'Department updated successfully!');
        } catch (\Exception $e) {
            return back()->with('error', "حدث خطأ ما الرجاء المحاولة مرة اخرى" . $e->getMessage());
        }
    }

    /**
     * todo Display the specified resource.
     */
    public function showDep(Request $request, Departments $department)
    {
        $title = 'الاقسام >' . $department->code . '> كتب';
        $department->load('media_one');
        return view('Admin.departments.showdep', compact('title', 'department'));
    }


    /**
     * todo Remove the specified resource from storage.
     */
    public function destroy(Request $request, Departments $department)
    {
        try {
            $department->delete();
            return back()->with('success', "delete tweet Succcessfully");
        } catch (\Exception $e) {
            return back()->with('error', 'Some thing Wrong');
        }
    }

    /**
     * todo restore index the specified resource from storage.
     */
    public function restoreindex()
    {
        $title = 'Trash';
        $departments = Departments::onlyTrashed()->with('media_one')->orderBy('deleted_at', 'desc')->get();
        return view('Admin.Departments.Trash.trash', compact('departments', 'title'));
    }

    /**
     * todo  restore the specified resource from storage.
     */
    public function restore(Request $request)
    {
        try {
            $department = Departments::withTrashed()->find($request->department);
            $department->restore();
            return back()->with('success', "Restore Department Successfully .");
        } catch (\Exception $e) {
            return back()->with('error', 'Some thing Wrong');
        }
    }


    /**
     * todo Remove the specified resource from storage.
     * !  Delete Forever
     */
    public function destroyForce(Request $request)
    {
        try {
            $department = Departments::withTrashed()->find($request->department);
            $department->forceDelete();
            return back()->with('success', "delete department Succcessfully");
        } catch (\Exception $e) {
            return back()->with('error', 'Some thing Wrong');
        }

    }
}