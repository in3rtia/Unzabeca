<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web view/home');
});

//these are member pages for authenticated users
//these pages are accessible only to authenticated users
Route::group(['middleware' => 'auth'], function () {

    //user routes
    Route::get('/members/my_profile', 'users_controller@my_profile');
    Route::get('/members/profile/{id}', 'users_controller@profile');

/*Routes related to members and alumni*/

    //Route to view members
    Route::get('/members/viewMembers', 'MembersController@viewMembers');

    //Route to view alumni
    Route::get('/alumni/viewAlumni', 'AlumniController@viewAlumni');

    //Route to view add member form
    Route::get('/members/viewAddMember', 'MembersController@viewAddMember');

    //Route to view add alumni form
    Route::get('/alumni/viewAddMember', 'AlumniController@viewAddAlumni');

    //Route to add a member
    Route::post('members/addMember', 'MembersController@addMember');

    //Route to delete a member
    Route::post('members/deleteMember/{id}', 'MembersController@delete');

    //Route to delete an alumni
    Route::post('alumni/deleteAlumni/{id}', 'AlumniController@delete');

    //Route to add alumni
    Route::post('alumni/addAlumni', 'AlumniController@addAlumni');

    //Route to edit an alumni
    Route::post('alumni/update/{id}', 'AlumniController@update');

    //Route to view edit profile
    Route::get('/members/my_profile/edit', 'users_controller@edit_form');

    //Route to edit profile
    Route::get('/members/profile/edit/{id}', 'users_controller@form');


    //Route to view edit member
    Route::get('/members/viewEditMember', 'MembersController@viewEditMember');

    //Route to edit member
    Route::post('members/update/{id}', 'MembersController@update');

    //Route to update profile
    Route::post('members/profile/update', 'users_controller@update');

    //Route to change password
    Route::post('members/change_password', 'PasswordController@change_password');

/* Route related to members and alumni end*/

//events routes
    Route::get('members/events', 'EventsController@allEvents');
    Route::post('/members/events/create', 'EventsController@create');
    Route::get('/members/events/edit/{id}', 'EventsController@editForm');
    Route::post('/members/events/update', 'EventsController@update');
    Route::get('/members/events/delete/{id}', 'EventsController@delete');


//article routes
    /* -- routes for everything article related -- */
// route to display article section main page
    Route::get('/members/articles', 'ArticleController@index');

// route to get articleForm page
    Route::get('/members/article/create', 'ArticleController@createArticle');

// posts article form
    Route::post('/members/article/create', 'ArticleController@store');

// route to view particular article
    Route::get('/members/article/view/{id}', 'ArticleController@view');

// edit article route
    Route::get('/members/article/edit/{id}', 'ArticleController@edit');

// update route
    Route::post('/members/article/update/{id}', 'ArticleController@update');

// detele route
    Route::post('/members/article/delete/{id}', 'ArticleController@delete');


});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
