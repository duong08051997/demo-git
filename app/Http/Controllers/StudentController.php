<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Services\StudentService;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    protected $studentService;
    public function __construct(StudentService $studentService)
    {
        $this->studentService=$studentService;
    }
    public function index()
    {
        $students = $this->studentService->all();
        return view('students.list',compact('students'));
    }
    public function create()
    {
        $groups = Group::all();
        return view('students.create',compact('groups'));
    }
    public function store(Request $request)
    {
        $this->studentService->addStudent($request);
        Session::flash('success','them vao danh sach hoc sinh thanh cong');
        return redirect()->route('students.index');
    }
    public function edit($id)
    {
        $groups = Group::all();
        $student =$this->studentService->findId($id);
        return view('students.edit',compact('student','groups'));
    }
    public function update(Request $request ,$id)
    {
        $this->studentService->updateStudent($request,$id);
        Session::flash('success','sua thong tin hoc sinh thanh cong');
        return redirect()->route('students.index');
    }
    public function delete($id)
    {
        $this->studentService->delete($id);
     Session::flash('success','xoa thong tin khach hang thanh cong');
     return redirect()->route('students.index');
    }
    ttestd
}
