<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\File;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Contracts\Service\Attribute\Required;

class TeacherController extends Controller
{
    // --------- tacher section -------------
    public function add_teacher(Request $req)
    {
        $req->validate([
            'name' => 'required|max:20',
            'title' => 'required|max:20',
            'phone' => 'required',
            'date' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'img' => 'required|image|mimes:jpg,jpeg,png',

        ]);
        Teacher::create([
            'name' => $req->name,
            'title' => $req->title,
            'phone' => $req->phone,
            'date' => $req->date,
            'address' => $req->address,
            'email' => $req->email,
            $imageName = time() . '.' . $req->img->extension(),
            'img' => $imageName,
            $req->img->move(public_path('image/teacher'), $imageName),
        ]);

        Alert::success('Congratulations', 'Teacher Added Successfully ');
        return redirect(route('add_teacher'));
    }
    public function all_teacher()
    {
        $teachers = Teacher::paginate(10);
        return view('Dashboard.pages.all-teacher', ['teachers' => $teachers]);
    }

    //---- delete teacher

    public function delete_teacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        Alert::success('Congratulations', 'Teacher Deleted Successfully ');
        return redirect()->back();
    }

    // ------ edit teacher -----------

    public function edit_teacher($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('Dashboard.edit_page.edit-teacher', ['teachers' => $teachers]);
    }

    // ---- update teacher -----

    public function update_teacher(Request $req, $id)
    {
        $req->validate([
            'name' => 'required|max:20',
            'title' => 'required|max:20',
            'phone' => 'required',
            'date' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $update = Teacher::findOrFail($id);
        $update->name = $req->name;
        $update->title = $req->title;
        $update->phone = $req->phone;
        $update->date = $req->date;
        $update->address = $req->address;
        $update->email = $req->email;
        if (isset($req->img)) {
            $previousImage = public_path('image/teacher') . '/' . $update->img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->img->extension();
            $req->img->move(public_path('image/teacher'), $imageName);
            $update->img = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'Teacher Updated Successfully ');
        return redirect(route('all_teacher'));
    }

    // ---------- teacher profile --------------
    public function teacher_profile($id){
        $teachers = Teacher::findOrFail($id);
        return view('Dashboard.profiles.teacher-profile',['teachers' => $teachers]);
    }
}
