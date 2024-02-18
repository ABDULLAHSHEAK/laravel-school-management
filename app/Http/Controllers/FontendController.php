<?php

namespace App\Http\Controllers;
use App\Models\SiteSetting;
use App\Models\Director;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function directors(){
        $SiteSetting = SiteSetting::all()->first();
        $directors = Director::latest()->paginate(1);
        return view('Fontend.pages.directors', compact('SiteSetting','directors'));
    }
}
