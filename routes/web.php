<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group ( [
    'middleware' => 'auth',
],function () {

Route::get('add-user', 'UsermanagementController@addUser')->name('add-user');
Route::post('submit_user', 'UsermanagementController@registerUser')->name('submit_user');
Route::get('view-user', 'UsermanagementController@viewUser')->name('view-user');
Route::post('search-view-user', 'UsermanagementController@searchUser')->name('search-view-user');
Route::get('/deleteuser/{id}', 'UsermanagementController@deleteuser')->name('deleteuser');
Route::get('edit-user/{id}', 'UsermanagementController@edituser')->name('edit-user');
Route::post('update-user/{id}', 'UsermanagementController@updateuser')->name('update-user');



Route::get('users', 'UsersController@index');

Route::get('users-list', 'UsersController@usersList'); 


Route::get('add-role', 'RoleController@addRole')->name('add-role');
Route::post('submit_new_role', 'RoleController@registerRole')->name('submit_new_role');
Route::get('view-role', 'RoleController@viewrole')->name('view-role');
Route::get('edit-role/{id}', 'RoleController@editRole')->name('edit-role');
Route::post('update-role/{id}', 'RoleController@updateRole')->name('update-role');
Route::get('/deleterole/{id}', 'RoleController@deleterole')->name('deleterole');

Route::get('add-sub-role', 'SubroleController@addsubrole')->name('add-sub-role');;
Route::post('submit_role', 'SubroleController@submitrole')->name('submit_role');
Route::get('view-sub-role', 'SubroleController@viewsubrole')->name('view-sub-role');
Route::get('/deletesubrole/{id}', 'SubroleController@deletesubrole')->name('deletesubrole');
Route::get('edit-sub-role/{id}', 'SubroleController@editsubRole')->name('edit-sub-role');
Route::post('update-sub-role/{id}', 'SubroleController@updatesubrole')->name('update-sub-role');


Route::resource('/configurations', ConfigurationController::class); 
Route::resource('/nationality', NationalityController::class); 


Route::get('view-dashboard', 'DashboardController@viewDashboard')->name('view-dashboard');


} );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
