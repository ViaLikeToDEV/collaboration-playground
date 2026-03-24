<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/team/{name}', function ($student_id) {
    $profileImageUrl = asset('image-profile/' . strtolower($student_id) . '.jpg'); // ปรับเป็นตัวเล็กให้หมดลดปัญหา Case-sensitive

    if (View::exists("team.$student_id")) {
        return view("team.$student_id", compact('profileImageUrl', 'student_id'));
    }

    abort(404);
});
