<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    $posts = Post::latest()->paginate(12);
    return view('template_main', ['posts' => $posts]);
});

Route::get('/register', function() {
    return view('authentication.register');
});

Route::get('/login', function() {
    return view('authentication.login');
});

Route::get('/create', function() {
    return view('make_post');
});

route::post('/logout', function(Request $request) {
    Auth::logout();
    
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
});

Route::get('/posts/{id}', function($id) {
    $post = Post::find($id);
    if(!isset($post))
        return view('not_found');
    
    return view('show_post', ['post' => $post]);
});
