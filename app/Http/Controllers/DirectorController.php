<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;
use Illuminate\Support\Facades\File;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Contracts\Service\Attribute\Required;


class DirectorController extends Controller
{
    // ----------------- board of directors --------------------------------

    public function add_directors(Request $req)
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
        Director::create([
            'name' => $req->name,
            'title' => $req->title,
            'phone' => $req->phone,
            'date' => $req->date,
            'address' => $req->address,
            'email' => $req->email,
            $imageName = time() . '.' . $req->img->extension(),
            'img' => $imageName,
            $req->img->move(public_path('image/director'), $imageName),
        ]);
        Alert::success('Congratulations', 'Director Added Successfully ');
        return redirect(route('add_directors'));
    }
    public function all_directors()
    {
        $directors = Director::paginate(10);
        return view('Dashboard.pages.all-director', ['directors' => $directors]);
    }

    // ------ delete directors --------------
    public function delete_directors($id)
    {
        $data = Director::findOrFail($id);
        $data->delete();
        Alert::success('Congratulations', 'Director Deleted Successfully ');
        return redirect()->back();
    }

    // ----------- edit director --------------
    public function edit_directors($id)
    {
        $directors = Director::findOrFail($id);
        return view('Dashboard.edit_page.edit-director', ['directors' => $directors]);
    }

    // ---- update director -----

    public function update_directors( Request $req, $id ) {
        $req->validate([
            'name' => 'required|max:20',
            'title' => 'required|max:20',
            'phone' => 'required',
            'date' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $update = Director::findOrFail($id);
        $update->name = $req->name;
        $update->title = $req->title;
        $update->phone = $req->phone;
        $update->date = $req->date;
        $update->address = $req->address;
        $update->email = $req->email;
        if (isset($req->img)) {
            $previousImage = public_path('image/director') . '/' . $update->img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->img->extension();
            $req->img->move(public_path('image/director'), $imageName);
            $update->img = $imageName;
        };
        $update->save();
        Alert::success('Congratulations', 'Director Updated Successfully ');
        return redirect(route('all_directors'));
    }

    // ---------- teacher profile --------------
    public function director_profile($id)
    {
        $directors = Director::findOrFail($id);
        return view('Dashboard.profiles.director-profile', ['directors' => $directors]);
    }
}
