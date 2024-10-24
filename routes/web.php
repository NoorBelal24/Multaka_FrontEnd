<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');

// ------------------------------------------------------------------------
//                                  Home
// ------------------------------------------------------------------------

Route::get('/home', function () {
    return view('home.index');
});


// ------------------------------------------------------------------------
//                                  dashBoard
// ------------------------------------------------------------------------
Route::get('/admin', function () {
    return view('Admin.User.AllUser');
})->name('Admin');

// view All User
Route::get('user/AllUsers', function () {
    return view('Admin.User.AllUser');
})->name('AllUsers');


//ActiveUser
Route::get('user/ActiveUser', function () {
    return view('Admin.User.activeUser');
})->name('ActiveUser');

//none ActiveUser
Route::get('user/nonActiveUser', function () {
    return view('Admin.User.nonActiveUser');
})->name('nonActiveUser');

//Huffaz
Route::get('user/huffaz', function () {
    return view('Admin.User.huffaz');
})->name('huffaz');


// ------------------------------------------------------------------------
//                              profile:
// ------------------------------------------------------------------------
// profile For User
Route::get('user/profile', function () {
    return view('User.Profile.index');
})->name('profile');



// ------------------------------------------------------------------------
//                              Mushrfeen Hefeth:
// ------------------------------------------------------------------------
// Route::get('Admin/mushrfeen/f', function () {
//     return view('Admin.MushrfeenHefeth.femael');
// })->name('AllMushrfeenHefethF');

Route::get('Admin/mushrfeen/m', function () {
    return view('Admin.MushrfeenHefeth.mael');
})->name('AllMushrfeenHefethM');


// ------------------------------------------------------------------------
//                              Mushrfeen Tathbeet:
// ------------------------------------------------------------------------
Route::get('Admin/AllMushrfeenTathbeet/m', function () {
    return view('Admin.MushrfeenTathbeet.male');
})->name('AllMushrfeenTathbeetM');


// Route::get('Admin/AllMushrfeenTathbeet/f', function () {
//     return view('Admin.MushrfeenHefeth.mael');
// })->name('AllMushrfeenTathbeetM');


// ------------------------------------------------------------------------
//                             Dawrat tathbeet
// ------------------------------------------------------------------------


Route::get('Admin/DawratTahbeet', function () {
    return view('Admin.DawratTahbeet.index');
})->name('DawratTahbeet');



// ------------------------------------------------------------------------
//                              Watting List:
// ------------------------------------------------------------------------


Route::get('Admin/wattingList/show', function () {
    return view('Admin.wattingList.index');
})->name('AllwattingList');

Route::get('Admin/wattingList/requestStudy', function () {
    return view('Admin.wattingList.studedRequest');
})->name('AllwattingList.study');

Route::get('Admin/wattingList/requestNONStudy', function () {
    return view('Admin.wattingList.nonStudedRequest');
})->name('AllwattingList.nonStudy');

Route::get('Admin/wattingList/rejectRequest', function () {
    return view('Admin.wattingList.rejectRequest');
})->name('AllwattingList.reject');


// ------------------------------------------------------------------------
//                       Policies and laws for multaka
// ------------------------------------------------------------------------

Route::get('Admin/Policies', function () {
    return view('Policies.index');
})->name('Policies');
