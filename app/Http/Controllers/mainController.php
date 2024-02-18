<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClassRoom;
use App\Models\Director;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Notice;
use App\Models\Routine;
use App\Models\Syllabus;
use App\Models\Result;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\File;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Contracts\Service\Attribute\Required;

class mainController extends Controller
{
    public function home()
    {
        $SiteSetting = SiteSetting::all()->first();
        return view('Fontend.pages.home',compact('SiteSetting'));
    }
    public function add_users(Request $req)
    {
        $req->validate([
            'name' => 'required|max:20',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'img' => 'required|mimes:png,jpg,webp,jpeg',
        ]);
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            $FileName = time() . '.' . $req->img->extension(),
            'img' => $FileName,
            $req->img->move(public_path('image/user'), $FileName),
        ]);
        Alert::success('Congratulations', 'User Added Successfully ');
        return redirect(route('add-users'));
    }
    public function all_users()
    {
        $users = User::paginate(2);
        return view('Dashboard.pages.all-users', ['users' => $users]);
    }

    public function update_users(Request $req){
        $req->validate([
            'name' => 'required|max:20',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'img' => 'nullable|mimes:png,jpg,webp,jpeg',
        ]);
        $id = $req->id;
        $update = User::findOrFail($id);
        $update->name = $req->name;
        $update->email = $req->email;
        $update->password = $req->password;
        if (isset($req->img)) {
            $previousImage = public_path('image/user') . '/' . $update->img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->img->extension();
            $req->img->move(public_path('image/user'), $imageName);
            $update->img = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'User Updated Successfully ');
        return redirect(route('all-users'));
    }

    // ------------ delete user ---------
    public function delete_users($id){
        $delete = User::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'User Deleted Successfully ');
        return redirect()->back();
    }


    // ===================== class room ===================


    public function class_room()
    {
        return view('Dashboard.pages.class-room');
    }
    public function add_class(Request $req)
    {
        $req->validate([
            'class_name' => 'required',
        ]);
        ClassRoom::create([
            'class_name' => $req->class_name,
        ]);
        Alert::success('Congratulations', 'Class Added Success');
        return redirect(url('/class-room'))->with('success', 'classroom added');
    }
    public function view_class()
    {
        $view_classes = ClassRoom::paginate(10);
        return view('Dashboard.pages.class-room', ['view_classes' => $view_classes]);
    }
    public function delete_class($id) {
        $delete = ClassRoom::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Class Delete Successfull');
        return redirect()->back();
    }
    public function edit_class($id)
    {
        $class = ClassRoom::findOrFail($id);
        return view('Dashboard.edit_page.edit-class', ['class' => $class]);
    }
    public function save_class(Request $req, $id)
    {
        $id = ClassRoom::findOrFail($id);
        $id->class_name = $req->class_name;
        $id->save();
        Alert::success('Congratulations', 'Class-Room Edit Successfully ');
        return redirect(url('/class-room'));
    }


    //========================== notice ===================



    public function add_notice()
    {
        return view('Dashboard.pages.add-notice');
    }

    public function store_notice(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf',
        ]);
        Notice::create([
            'title' => $req->title,
            'description' => $req->description,
            $FileName = time() . '.' . $req->file->extension(),
            'file' => $FileName,
            $req->file->move(public_path('image/notice'), $FileName),
        ]);
        Alert::success('Congratulations', 'Teacher Added Successfully ');
        return redirect(route('add_notice'));
    }
    public function all_notice()
    {
        $notices = Notice::paginate(10);
        return view('Dashboard.pages.all-notice', ['notices' => $notices]);
    }

    // ------- update notice ----------------


    public function update_notice(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf',
        ]);
        $id = $req->id;
        $update = Notice::findOrFail($id);
        $update->title = $req->title;
        $update->description = $req->description;
        if (isset($req->file)) {
            $previousImage = public_path('image/notice') . '/' . $update->file;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->file->extension();
            $req->file->move(public_path('image/notice'), $imageName);
            $update->file = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'Notice Updated Successfully ');
        return redirect(route('all_notice'));
    }
    // --- notice delete
    public function delete_notice($id)
    {
        $delete = Notice::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Notice Deleted Successfully ');
        return redirect(route('all_notice'));
    }

    // ---------------- Class Routine ---------------
    public function add_routine()
    {
        $classes = ClassRoom::all();
        return view('Dashboard.pages.add-routine', ['classes' => $classes]);
    }

    public function store_routine(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'class' => 'required',
            'file' => 'required|mimes:pdf',

        ]);
        Routine::create([
            'title' => $req->title,
            'description' => $req->description,
            'class' => $req->class,
            $FileName = time() . '.' . $req->file->extension(),
            'file' => $FileName,
            $req->file->move(public_path('image/routine'), $FileName),
        ]);
        Alert::success('Congratulations', 'Routine Added Successfully ');
        return redirect(route('add_routine'));
    }
    public function all_routine()
    {
        $routines = Routine::paginate(10);
        return view('Dashboard.pages.all-routine', ['routines' => $routines]);
    }

    // --------- delete routine --------
    public function delete_routine($id)
    {
        $delete = Routine::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Routine Deleted Successfully ');
        return redirect(route('all_routine'));
    }
    //----------- update routine -------------
    public function update_routine(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf',
        ]);
        $id = $req->id;
        $update = Routine::findOrFail($id);
        $update->title = $req->title;
        $update->description = $req->description;
        if (isset($req->file)) {
            $previousImage = public_path('image/routine') . '/' . $update->file;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->file->extension();
            $req->file->move(public_path('image/routine'), $imageName);
            $update->file = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'Routine Updated Successfully ');
        return redirect(route('all_routine'));
    }

    // ============================ Syllabus Routine ========================

    public function add_syllabus()
    {
        $classes = ClassRoom::all();
        return view('Dashboard.pages.add-syllabus', ['classes' => $classes]);
    }

    public function store_syllabus(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'class' => 'required',
            'file' => 'required|mimes:pdf',

        ]);
        Syllabus::create([
            'title' => $req->title,
            'description' => $req->description,
            'class' => $req->class,
            $FileName = time() . '.' . $req->file->extension(),
            'file' => $FileName,
            $req->file->move(public_path('image/syllabus'), $FileName),
        ]);
        Alert::success('Congratulations', 'Syllabus Added Successfully ');
        return redirect(route('add_syllabus'));
    }
    public function all_syllabus()
    {
        $syllabuss = Syllabus::paginate(10);
        return view('Dashboard.pages.all-syllabus', ['syllabuss' => $syllabuss]);
    }
    // --------- delete syllabus --------------
    public function delete_syllabus($id)
    {
        $delete = Syllabus::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Syallabus Deleted Successfully ');
        return redirect(route('all_syllabus'));
    }


    //----------- update Syllabus -------------
    public function update_syllabus(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf',
        ]);
        $id = $req->id;
        $update = Syllabus::findOrFail($id);
        $update->title = $req->title;
        $update->description = $req->description;
        if (isset($req->file)) {
            $previousImage = public_path('image/syllabus') . '/' . $update->file;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->file->extension();
            $req->file->move(public_path('image/syllabus'), $imageName);
            $update->file = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'Syllabus Updated Successfully ');
        return redirect(route('all_syllabus'));
    }

    // =========================== result Routine =======================
    public function add_result()
    {
        $classes = ClassRoom::all();
        return view('Dashboard.pages.add-result', ['classes' => $classes]);
    }

    public function store_result(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'class' => 'required',
            'file' => 'required|mimes:pdf',

        ]);
        Result::create([
            'title' => $req->title,
            'description' => $req->description,
            'class' => $req->class,
            $FileName = time() . '.' . $req->file->extension(),
            'file' => $FileName,
            $req->file->move(public_path('image/result'), $FileName),
        ]);
        Alert::success('Congratulations', 'Result Added Successfully ');
        return redirect(route('add_result'))->with('success', 'insert successfully');
    }
    public function all_result()
    {
        $results = Result::paginate(10);
        return view('Dashboard.pages.all-result', ['results' => $results]);
    }


    //----------- update Result -------------
    public function update_result(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf',
        ]);
        $id = $req->id;
        $update = Result::findOrFail($id);
        $update->title = $req->title;
        $update->description = $req->description;
        if (isset($req->file)) {
            $previousImage = public_path('image/result') . '/' . $update->file;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->file->extension();
            $req->file->move(public_path('image/result'), $imageName);
            $update->file = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'Result Updated Successfully ');
        return redirect(route('all_result'));
    }

    // ----------- delete results --------------
    public function delete_result($id)
    {
        $delete = Result::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Result Deleted Successfully ');
        return redirect(route('all_result'));
    }


    // = ========================== image slider =========================

    public function image_slider(){
        $sliders = SliderImage::paginate(10);
        return view('dashboard.pages.image-slider',['sliders' => $sliders]);
    }

    public function insert_image_slider(Request $req){
        $req->validate([
            'img' => 'required|image|mimes:png,jpg,jpeg,webp',
        ]);

        SliderImage::create([
            $FileName = time() . '.' . $req->img->extension(),
            'img' => $FileName,
            $req->img->move(public_path('image/slider'), $FileName),
        ]);
        Alert::success('Congratulations', 'Slider Image Added Successfully ');
        return redirect(route('image_slider'));
    }

    // - delete slider ----
    public function delete_image_slider($id){
        $delete = SliderImage::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Slider Image Deleted Successfully ');
        return redirect()->back();
    }
}
