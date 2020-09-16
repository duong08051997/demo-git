<?php

namespace App\Http\Repositories;
use App\Students;

class StudentRepository
{
    protected $student;
    public function __construct(Students $student)
    {
        $this->student=$student;
    }
    public function getAll()
    {
        return $this->student->all();
    }
    public function save($student)
    {
        $student->save();
    }
    public function findId($id)
    {
        return $this->student->findOrFail($id);
    }
}

