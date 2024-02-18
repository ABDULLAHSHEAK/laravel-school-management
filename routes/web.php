<?php

use App\Http\Controllers\GallerryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

// Route::get('/dashboard',[mainController::class,'index'])->name('index');
Route::get('/', [mainController::class, 'home'])->name('font_home');
Route::get('/board-of-directors', [FontendController::class, 'directors'])->name('directors');
// Route::get('/header', [FontendController::class, 'headers'])->name('headers');







// ============================= Dashboard Route ========================


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/all-users', [mainController::class, 'all_users'])->name('all-users');
    Route::get('/add-users', function () {
        return view('Dashboard.pages.add-users');
    });
    Route::post('/add-users', [mainController::class, 'add_users'])->name('add-users');
    Route::post('/all-users', [mainController::class, 'update_users'])->name('update_users');
    Route::get('/all-users/{id}', [mainController::class, 'delete_users'])->name('delete_users');


    // -------- classroom route ------
    Route::get('/class-room', [mainController::class, 'class_room'])->name('class_room');
    Route::post('/class-room', [mainController::class, 'add_class'])->name('add-class');
    Route::get('/class-room', [mainController::class, 'view_class'])->name('view_class');
    Route::get('/class-room/{id}', [mainController::class, 'delete_class'])->name('delete_class');
    Route::get('/edit-class/{id}', [mainController::class, 'edit_class'])->name('edit_class');
    Route::post('/edit-class/{id}', [mainController::class, 'save_class'])->name('save_class');


    // -------- teacher route --------------

    Route::get('/add-teacher', function () {
        return view('Dashboard.pages.add-teacher');
    });
    Route::post('/add-teacher', [TeacherController::class, 'add_teacher'])->name('add_teacher');
    Route::get('/all-teacher', [TeacherController::class, 'all_teacher'])->name('all_teacher');
    Route::get('/all-teacher/{id}', [TeacherController::class, 'delete_teacher']);
    Route::get('/edit-teacher/{id}', [TeacherController::class, 'edit_teacher'])->name('edit_teacher');
    Route::post('/edit-teacher/{id}', [TeacherController::class, 'update_teacher'])->name('update_teacher');
    Route::get('/teacher-profile/{id}', [TeacherController::class, 'teacher_profile'])->name('teacher_profile');


    // ------------- board of directors sectioj --------------------------------

    Route::get('/add-directors', function () {
        return view('Dashboard.pages.add-directors');
    });
    Route::post('/add-directors', [DirectorController::class, 'add_directors'])->name('add_directors');
    Route::get('/all-directors', [DirectorController::class, 'all_directors'])->name('all_directors');
    Route::get('/all-directors/{id}', [DirectorController::class, 'delete_directors'])->name('delete_directors');
    Route::get('/edit-directors/{id}', [DirectorController::class, 'edit_directors'])->name('edit_directors');
    Route::post('/edit-directors/{id}', [DirectorController::class, 'update_directors'])->name('update_directors');
    Route::get('/director-profile/{id}', [DirectorController::class, 'director_profile'])->name('director_profile');


    // ------------- Student Route  --------------------------------

    Route::get('/add-students', [StudentController::class, 'show_students'])->name('show_students');
    Route::post('/add-students', [StudentController::class, 'store_students'])->name('store_students');
    Route::get('/all-students', [StudentController::class, 'all_students'])->name('all_students');
    Route::get('/delete-student/{id}', [StudentController::class, 'delete_student'])->name('delete_student');
    Route::get('/edit-student/{id}', [StudentController::class, 'edit_student'])->name('edit_student');
    Route::post('/edit-student/{id}', [StudentController::class, 'update_student'])->name('update_student');
    Route::get('/student-profile/{id}', [StudentController::class, 'student_profile'])->name('student_profile');


    // -------------- notice route --------------

    Route::get('/add-notice', [mainController::class, 'add_notice'])->name('add_notice');
    Route::post('/add-notice', [mainController::class, 'store_notice'])->name('store_notice');
    Route::get('/all-notice', [mainController::class, 'all_notice'])->name('all_notice');
    Route::post('/all-notice', [mainController::class, 'update_notice'])->name('update_notice');
    Route::get('/all-notice/{id}', [mainController::class, 'delete_notice'])->name('delete_notice');


    // -------------- routine route --------------

    Route::get('/add-routine', [mainController::class, 'add_routine'])->name('add_routine');
    Route::post('/add-routine', [mainController::class, 'store_routine'])->name('store_routine');
    Route::get('/all-routine', [mainController::class, 'all_routine'])->name('all_routine');
    Route::post('/all-routine', [mainController::class, 'update_routine'])->name('update_routine');
    Route::get('/all-routine/{id}', [mainController::class, 'delete_routine'])->name('delete_routine');


    // -------------- Syllabus route --------------
    Route::get('/add-syllabus', [mainController::class, 'add_syllabus'])->name('add_syllabus');
    Route::post('/add-syllabus', [mainController::class, 'store_syllabus'])->name('store_syllabus');
    Route::get('/all-syllabus', [mainController::class, 'all_syllabus'])->name('all_syllabus');
    Route::post('/all-syllabus', [mainController::class, 'update_syllabus'])->name('update_syllabus');
    Route::get('/all-syllabus/{id}', [mainController::class, 'delete_syllabus'])->name('delete_syllabus');


    // -------------- Result route --------------
    Route::get('/add-result', [mainController::class, 'add_result'])->name('add_result');
    Route::post('/add-result', [mainController::class, 'store_result'])->name('store_result');
    Route::get('/all-result', [mainController::class, 'all_result'])->name('all_result');
    Route::post('/all-result', [mainController::class, 'update_result'])->name('update_result');
    Route::get('/all-result/{id}', [mainController::class, 'delete_result'])->name('delete_result');




    // ----------------------------- Gallery Routes-------------------------------------
    // -------------- Photo gallery route --------------

    Route::get('/photo-gallery', [GallerryController::class, 'show_photo_gallery'])->name('show_photo_gallery');
    Route::post('/photo-gallery', [GallerryController::class, 'store_photo_gallery'])->name('store_photo_gallery');
    Route::get('/photo-gallery/{id}', [GallerryController::class, 'delete_photo_gallery'])->name('delete_photo_gallery');


    // -------------- Video gallery route --------------
    Route::get('/video-gallery', [GallerryController::class, 'show_video_gallery'])->name('show_video_gallery');
    Route::post('/video-gallery', [GallerryController::class, 'store_video_gallery'])->name('store_video_gallery');
    Route::get('/video-gallery/{id}', [GallerryController::class, 'delete_video_gallery'])->name('delete_video_gallery');

    // ----------------------------- Setting Routes-------------------------------------

    // --- general setting ----
    Route::get('/genereal-setting', [SettingController::class, 'general_setting'])->name('general_setting');
    Route::post('/genereal-setting', [SettingController::class, 'update_general_setting'])->name('update_general_setting');


    // --- Site setting ----
    Route::get('/site-setting', [SettingController::class, 'site_setting'])->name('site_setting');
    Route::post('/site-setting', [SettingController::class, 'update_site_setting'])->name('update_site_setting');

    // ----------- Site Image Setting ----------
    Route::get('/site-image-setting', [SettingController::class, 'site_image_setting'])->name('site_image_setting');
    Route::post('/site-image-setting', [SettingController::class, 'update_site_image_setting'])->name('update_site_image_setting');


    // ============================= Sidebar ========================


    Route::get('/sidebar-setting', [SettingController::class, 'view_sidebar'])->name('view_sidebar');
    Route::post('/sidebar-setting', [SettingController::class, 'update_sidebar'])->name('update_sidebar');



     // ============================= Image Slider ========================

    Route::get('/image-slider', [mainController::class, 'image_slider'])->name('image_slider');
    Route::post('/image-slider', [mainController::class, 'insert_image_slider'])->name('insert_image_slider');
    Route::get('/image-slider/{id}', [mainController::class, 'delete_image_slider'])->name('delete_image_slider');
});
