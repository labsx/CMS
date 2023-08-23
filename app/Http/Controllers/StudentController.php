<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function display()
      {
        return view ('students.studentregistration');
      }

    public function store (Request $request)
      {
       $validated = $request->validate([
            "name" => ['required', 'min:5', 'max:255'],
            "address" => ['required', 'min:4', 'max:255'],
            "contact" => ['required', 'min:11', 'max:255'],
            "age" => ['required', 'min:2', 'max:4'],
            "gender" => ['required'],
            "guardian" =>['required','min:4'] ,
            "email" => ['required','email', Rule::unique('users', 'email')] ,
            
        ]);

            Student::create($validated);
            return back()->with('message', 'New Student Added');
      }

    public function list(Request $request)
      {
        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->Paginate(10));
        return view ('students.student_list', $data);
      }

    public function show($id)
      {
        $data = Student::findOrFail($id);
        return view('students.edit_student',['student' => $data]);
      }
         
    public function edit(Request $request, Student $student)
      {
        $validated = $request->validate([
            "name" => ['required', 'min:5', 'max:255'],
            "address" => ['required', 'min:4', 'max:255'],
            "contact" => ['required', 'min:11', 'max:255'],
            "age" => ['required', 'min:2', 'max:4'],
            "gender" => ['required'],
            "guardian" =>['required','min:4'] ,
            "email" => ['required','email', Rule::unique('users', 'email')] ,
                
            ]);
    
            $student->update($validated);
            return back()->with('message', 'Update Data successfully!');
      }

        public function destroy(Student $student)
     {
            $student->delete();
            return back()->with('message', 'Deleted Successfully');
     }
}
