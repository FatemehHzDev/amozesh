<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
Volt::route('add_user','auth.register_user_1')->name('user_1')->middleware('auth');
Volt::route('ADD_USER','auth.register_user_2')->name('user_2')->middleware('auth');
Volt::route('courses','course.list')->name('courses')->middleware('auth');
Volt::route('skills/{fild_id}','skill.list')->name('skills')->middleware('signed')->middleware('auth');
Volt::route('orcourse','organ_course.list')->name('orcourse')->middleware('auth');
Volt::route('roles','role.list')->name('roles')->middleware('auth');
Volt::route('active','active.list')->name('active')->middleware('auth');
Volt::route('phones','phone.list')->name('phone')->middleware('auth');
Volt::route('rooms','room.list')->name('room')->middleware('auth');
Volt::route('teachers','teacher.list')->name('teacher')->middleware('auth');
Volt::route('programs','program.list')->name('program')->middleware('auth');
Volt::route('questions','que.list')->name('question')->middleware('auth');
Volt::route('current/{room_id}','current.list')->name('current')->middleware('signed')->middleware('auth');
Volt::route('next/{room_id}/ {time}','next.list')->name('next')->middleware('signed')->middleware('auth');
Volt::route('last/{room_id}/ {time}','last.list')->name('last')->middleware('signed')->middleware('auth');
Volt::route('education','p_student.list')->name('education')->middleware('auth');
Volt::route('exams','exam.list')->name('exam')->middleware('auth');
Volt::route('examuser/{e_id}','exam_user.list')->name('examuser')->middleware('signed')->middleware('auth');
Volt::route('azmoon','azmoon.list')->name('azmoon')->middleware('auth');
Volt::route('start/{e_id}','start.list')->name('start')->middleware('signed')->middleware('auth');
Volt::route('result/{e_id}','result.list')->name('result')->middleware('signed')->middleware('auth');
Volt::route('organs','organ.list')->name('organ')->middleware('auth');
