<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //liste des étudiants
    public function listStudents()
    {

        $students = Student::all();

        return view('students.studentlists', [
            'students' => $students
        ]);
    }

    //creation FORM
    public function createForm()
    {
        return view('students.studentform');
    }

    // Insertion & Enregistrement 
    public function insertStudent()
    {
        request()->validate([
            'firstname' => 'required',
            'age' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $studentfirstname = request('firstname');
        $studentage = request('age');

        $student = new Student();

        $student->name = $studentfirstname;
        $student->age = $studentage;

        //Upload photo
        if ($files = request()->file('picture')) {
            $destinationPath = 'images'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $student->avatar = $profileImage;
        }

        $student->save();
        return Redirect::to('/');
    }
}
