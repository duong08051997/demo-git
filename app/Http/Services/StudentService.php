<?php
namespace App\Http\Services;

use App\Http\Repositories\StudentRepository;
use App\Students;
use Illuminate\Support\Facades\Storage;

class StudentService
{
    protected $studentRepository;
    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository=$studentRepository;
    }
    public function all()
    {
        return $this->studentRepository->getAll();
    }
    public function addStudent($request)
    {
        $student =new Students();
        //upload file
        if ($request->hasFile('image')) {
            $image =$request->file('image');
            $path = $image->store('image','public');
            $student->image=$path;
        }
        $student->name =$request->input('name');
        $student->email=$request->input('email');
        $student->date=$request->input('date');
        $this->studentRepository->save($student);
        $student->groups()->sync($request->group);
    }
  public function findId($id)
  {
 return $this->studentRepository->findId($id);

  }
    public function updateStudent($request ,$id)
    {
        $student = $this->studentRepository->findId($id);
        //cap nhat anh
        if ($request->hasFile('image')) {

            //xoa anh cu neu co
            $studentImg = $student->image;
            if ($studentImg) {
                Storage::delete('/public/'.$studentImg);
            }
            //cap nhat anh moi
            $image =$request->file('image');
            $path =$image->store('images','public');
            $student->image =$path;
        }
        $student->name =$request->input('name');
        $student->email=$request->input('email');
        $student->date=$request->input('date');
        $student->groups()->sync($request->group);
        $this->studentRepository->save($student);

    }
    public function delete($id)
    {
       $student= $this->studentRepository->findId($id);
        $image =$student->image;
        //xoa anh
        if ($image) {
            Storage::delete('/public/.image');
        }
        $student->groups()->detach();
        $student->delete();
    }
}
