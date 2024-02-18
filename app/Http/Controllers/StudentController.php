<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\File;
use App\Helper\DateHelper;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;


class StudentController extends Controller
{

    // ---------- Student --------------
    public function show_students()
    {
        $classes = ClassRoom::all();
        return view('Dashboard.pages.add-student', ['classes' => $classes]);
    }
    public function store_students(Request $req)
    {
        $req->validate([
            'name' => 'required|max:20',
            'fa_name' => 'required|max:20',
            'ma_name' => 'required|max:20',
            'student_phone' => 'required',
            'parents_phone' => 'required',
            'email' => 'nullable|email',
            'birthdate' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'blood' => 'nullable',
            'roll' => 'required|numeric',
            'reg' => 'required|numeric',
            'class' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        Student::create([
            'name' => $req->name,
            'fa_name' => $req->fa_name,
            'ma_name' => $req->ma_name,
            'student_phone' => $req->student_phone,
            'parents_phone' => $req->parents_phone,
            'email' => $req->email,
            'birthdate' => $req->birthdate,
            'address' => $req->address,
            'gender' => $req->gender,
            'blood' => $req->blood,
            'roll' => $req->roll,
            'reg' => $req->reg,
            'class' => $req->class,
            $imageName = time() . '.' . $req->img->extension(),
            'img' => $imageName,
            $req->img->move(public_path('image/student'), $imageName),
        ]);
        Alert::success('Congratulations', 'Student Added Successfully ');
        return redirect(route('store_students'));
    }
    public function all_students()
    {
        $students = Student::paginate(10);
        return view('Dashboard.pages.all-student', ['students' => $students]);
    }

    // ----------- delete student ------------------------
    public function delete_student($id){
        $student = Student::findOrFail($id);
        $student->delete();
        Alert::success('Congratulations', 'Student Deleted Successfully');
        return redirect()->back();
    }

    // ------------------ edit student ------------------------

    public function edit_student($id){
        $student = Student::findOrFail($id);
        $classes = ClassRoom::all();
        return view('Dashboard.edit_page.edit-student',['student' => $student],['classes' => $classes]);
    }

    // ---------- update student --------------------

    public function update_student(Request $req, $id){
        $req->validate([
            'name' => 'required|max:20',
            'fa_name' => 'required|max:20',
            'ma_name' => 'required|max:20',
            'student_phone' => 'required',
            'parents_phone' => 'required',
            'email' => 'nullable|email',
            'birthdate' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'blood' => 'nullable',
            'roll' => 'required|numeric',
            'reg' => 'required|numeric',
            'class' => 'required',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
        $update = Student::findOrFail($id);
        $update->name = $req->name;
        $update->fa_name = $req->fa_name;
        $update->ma_name = $req->ma_name;
        $update->student_phone = $req->student_phone;
        $update->parents_phone = $req->parents_phone;
        $update->email = $req->email;
        $update->birthdate = $req->birthdate;
        $update->address = $req->address;
        $update->gender = $req->gender;
        $update->blood = $req->blood;
        $update->roll = $req->roll;
        $update->reg = $req->reg;
        $update->class = $req->class;
        if(isset($req->img)){
            $previousImage = public_path('image/student') . '/' . $update->img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->img->extension();
            $req->img->move(public_path('image/student'), $imageName);
            $update->img = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'Student Updated Successfully ');
        return redirect(route('all_students'));
    }

    // --------- student profiles --------------------------------

    public function student_profile($id){
        $student = Student::findOrFail($id);
        return view('Dashboard.profiles.student-profile',['student' => $student]);
    }
}
