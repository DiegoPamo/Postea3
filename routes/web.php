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
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::redirect('/', '/posts');
Route::redirect('/home', '/posts');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create')->name('crear');
Route::post('/posts/create', 'PostController@store');
Route::get('/posts/myPosts', 'PostController@userPosts')->name('MyPosts');

Route::delete('posts/{id}', 'PostController@Delete')
    ->name('posts.Delete');
Route::get('/posts/{id}', 'PostController@show')->name('post');
Route::post('/comments', 'CommentController@store');

Route::get('usuario/editar', 'UserController@edit')->name('editarUsuario');
Route::post('usuario/editar', 'UserController@update');

Route::get('/mail', function(){
    Mail::to('diego.pamo@tecsup.edu.pe')->send(new WelcomeMail);
    return new WelcomeMail();
});

Route::get('/notificaciones',function(){
    return view('posts.notificaciones');
})->name('notificaciones');

Auth::routes();
//Route::get('/home', 'PostController@index')->name('home');

