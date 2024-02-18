<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Video;

class GallerryController extends Controller
{
    // --------- photo gallery ----------
    public function show_photo_gallery(){
        $photos = Photo::paginate(20);
        return view('Dashboard.pages.photo-gallery', ['photos' => $photos]);
    }
    public function store_photo_gallery(Request $req){
        $req->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        Photo::create([
            $FileName = time() . '.' . $req->file->extension(),
            'file' => $FileName,
            $req->file->move(public_path('image/photo-gallery'), $FileName),
        ]);
        Alert::success('Congratulations', 'Photo Upload Success');
        return redirect(route('show_photo_gallery'));
    }

    //--------- delete gellery -------------
    public function delete_photo_gallery($id){
        $delete = Photo::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Photo Delete Susscess');
        return redirect(route('show_photo_gallery'));
    }
    // ================================ Video gallery ===================
    public function show_video_gallery(){
        $videos = Video::paginate(20);
        return view('Dashboard.pages.video-gallery', ['videos' => $videos]);
    }

    public function store_video_gallery(Request $req){
        $req->validate([
            'video_url' => 'required',
        ]);
        Video::create([
            'video_url' => $req->video_url,
        ]);
        Alert::success('Congratulations', 'Video Upload Success');
        return redirect(route('show_video_gallery'));
    }

    //--------- delete Video gellery -------------
    public function delete_video_gallery($id)
    {
        $delete = Video::findOrFail($id);
        $delete->delete();
        Alert::success('Congratulations', 'Video Delete Susscess');
        return redirect(route('show_video_gallery'));
    }
}
