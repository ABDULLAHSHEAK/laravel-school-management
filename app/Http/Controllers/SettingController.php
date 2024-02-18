<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\GeneralSetting;
use App\Models\SiteImage;
use App\Models\SidebarSetting;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    // general setting controller
    public function general_setting()
    {
        $data = GeneralSetting::all()->first();
        return view('Dashboard.setting.general_setting', ['data' => $data]);
    }

    public function update_general_setting(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'fav_icone' => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'fb_url' => 'required',
            'x_url' => 'required',
            'insta_url' => 'required',
            'youtube_url' => 'required',
            'linkdin_url' => 'required',
            'footer' => 'required',
        ]);
        $update = GeneralSetting::all()->first();
        $update->title = $req->title;
        if (isset($req->fav_icone)) {
            // Delete previous image
            $previousImage = public_path('image/general-setting') . '/' . $update->fav_icone;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->fav_icone->extension();
            $req->fav_icone->move(public_path('image/general-setting'), $imageName);
            $update->fav_icone = $imageName;
        }
        $update->fb_link = $req->fb_url;
        $update->x_link = $req->x_url;
        $update->instagram_link = $req->insta_url;
        $update->youtube_link = $req->youtube_url;
        $update->linkdin_link = $req->linkdin_url;
        $update->footer_text = $req->footer;
        $update->save();
        Alert::success('Congratulations', 'General-Setting Successfully Updated');
        return redirect()->back();
    }

    // ----------------------- site setting controller ----------------------------

    public function site_setting()
    {
        $data = SiteSetting::all()->first();
        return view('Dashboard.setting.site_setting', ['data' => $data]);
    }
    public function update_site_setting(Request $req)
    {

        $req->validate([
            'school_name' => 'required',
            'school_address' => 'required',
            'establis_date' => 'required|max:4',
            'eiin_number' => 'required',
            'school_code' => 'required',
            'school_number' => 'required',
            'hot_line' => 'required',
            'school_email' => 'required|email',
            'principal_email' => 'required|email',
            'web_url' => 'required',
            'school_logo' => 'nullable|image|mimes:jpg,png,jpeg,webp',
            'gov_logo' => 'nullable|image|mimes:jpg,png,jpeg,webp',
        ]);

        $setting = SiteSetting::all()->first();
        $setting->school_name = $req->school_name;
        $setting->school_address = $req->school_address;
        $setting->establis_date = $req->establis_date;
        $setting->eiin_number = $req->eiin_number;
        $setting->school_code = $req->school_code;
        $setting->school_number = $req->school_number;
        $setting->hot_line = $req->hot_line;
        $setting->school_email = $req->school_email;
        $setting->principal_email = $req->principal_email;
        $setting->web_url = $req->web_url;

        if (isset($req->school_logo)) {
            // Delete previous image
            $previousImage = public_path('image/site_setting') . '/' . $setting->school_logo;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->school_logo->extension();
            $req->school_logo->move(public_path('image/site_setting'), $imageName);
            $setting->school_logo = $imageName;
        }
        if (isset($req->gov_logo)) {
            // Delete previous image
            $previousImage = public_path('image/site_setting') . '/' . $setting->gov_logo;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->gov_logo->extension();
            $req->gov_logo->move(public_path('image/site_setting'), $imageName);
            $setting->gov_logo = $imageName;
        }


        // function update($logo){
        //     if (isset($req->$logo)) {
        //         // Delete previous image
        //         $previousImage = public_path('image/site_setting') . '/' . $setting->$logo;
        //         if (File::exists($previousImage)) {
        //             File::delete($previousImage);
        //         }
        //         // Upload and update new image
        //         $imageName = time() . '.' . $req->$logo->extension();
        //         $req->$logo->move(public_path('image/site_setting'), $imageName);
        //         $setting->$logo = $imageName;
        //     }
        // }
        // $schoolLogo = $req->school_logo;
        // $govLogo = $req->gov_logo;
        // update($schoolLogo);
       // update($govLogo);

       
        // function update($logo,$setting){
        //     if (isset($logo)) {
        //         // Delete previous image
        //         $previousImage = public_path('image/site_setting') . '/' . $setting->$logo;
        //         if (File::exists($previousImage)) {
        //             File::delete($previousImage);
        //         }
        //         // Upload and update new image
        //         $imageName = time() . '.' . $logo->extension();
        //         $logo->move(public_path('image/site_setting'), $imageName);
        //         $setting->$logo = $imageName;
        //     }
        // }
        // $schoolLogo = $req->school_logo;
        // $govLogo = $req->gov_logo;
        // $schoolSetting = $setting->school_logo;
        // $govSetting = $setting->gov_logo;
        // update($schoolLogo,$schoolSetting);
        // update($govLogo,$govSetting);

        
        $setting->save();
        Alert::success('Congratulations', 'Site-Setting Successfully Updated');
        return redirect()->back();
    }


    // -====================== site image setting -=================


    public function site_image_setting(){
        $images = SiteImage::all()->first();
        return view('Dashboard.setting.site_image_setting',['images'=>$images]);
    }
    public function update_site_image_setting(Request $req){
        $req->validate([
            'history' => 'required',
            'bg_img' => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'info_img' => 'nullable|image|mimes:png,jpg,jpeg,webp',
        ]);
        $update = SiteImage::all()->first();
        $update->history = $req->history;
        if (isset($req->bg_img)) {
            // Delete previous image
            $previousImage = public_path('image/site_image') . '/' . $update->bg_img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->bg_img->extension();
            $req->bg_img->move(public_path('image/site_image'), $imageName);
            $update->bg_img = $imageName;
        }
        if (isset($req->info_img)) {
            // Delete previous image
            $previousImage = public_path('image/site_image') . '/' . $update->info_img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->info_img->extension();
            $req->info_img->move(public_path('image/site_image'), $imageName);
            $update->info_img = $imageName;
        }
        $update->save();
        Alert::success('Congratulations','Setting Save Successfully');
        return redirect(route('site_image_setting'));
    }

    // ================== Sidebar Setting ===========================

    public function view_sidebar(){
        $data = SidebarSetting::all()->first();
        return view('Dashboard.setting.sidebar_setting',['data'=>$data]);
    }

    public function update_sidebar(Request $req){
        $req->validate([
            'director_name' => 'required',
            'director_talk' => 'required',
            'director_img' => 'nullable|image|mimes:png,jpg,jpeg,webp',

            'principal_name' => 'required',
            'principal_talk' => 'required',
            'principal_img' => 'nullable|image|mimes:png,jpg,jpeg,webp',

            'ass_principal_name' => 'required',
            'ass_principal_talk' => 'required',
            'ass_principal_img' => 'nullable|image|mimes:png,jpg,jpeg,webp',

            'hotline_img' => 'nullable|image|mimes:png,jpg,jpeg,webp',

        ]);
        $update = SidebarSetting::all()->first();
        $update->director_name = $req->director_name;
        $update->director_talk = $req->director_talk;
        if (isset($req->director_img)) {
            // Delete previous image
            $previousImage = public_path('image/sidebar_setting') . '/' . $update->director_img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->director_img->extension();
            $req->director_img->move(public_path('image/sidebar_setting'), $imageName);
            $update->director_img = $imageName;
        }

        $update->principal_name = $req->principal_name;
        $update->principal_talk = $req->principal_talk;
        if (isset($req->principal_img)) {
            // Delete previous image
            $previousImage = public_path('image/sidebar_setting') . '/' . $update->principal_img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->principal_img->extension();
            $req->principal_img->move(public_path('image/sidebar_setting'), $imageName);
            $update->principal_img = $imageName;
        }

        $update->ass_principal_name = $req->ass_principal_name;
        $update->ass_principal_talk = $req->ass_principal_talk;
        if (isset($req->ass_principal_img)) {
            // Delete previous image
            $previousImage = public_path('image/sidebar_setting') . '/' . $update->ass_principal_img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->ass_principal_img->extension();
            $req->ass_principal_img->move(public_path('image/sidebar_setting'), $imageName);
            $update->ass_principal_img = $imageName;
        }

        if (isset($req->hotline_img)) {
            // Delete previous image
            $previousImage = public_path('image/sidebar_setting') . '/' . $update->hotline_img;
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            // Upload and update new image
            $imageName = time() . '.' . $req->hotline_img->extension();
            $req->hotline_img->move(public_path('image/sidebar_setting'), $imageName);
            $update->hotline_img = $imageName;
        }
        $update->save();
        Alert::success('Congratulations', 'Sidebar Setting Updated');
        return redirect(route('view_sidebar'));
    }
}

