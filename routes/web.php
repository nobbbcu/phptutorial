<?php

use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
|*/

Route::get('/user/country', function(){

});

// Accessing the pivot table
// Route::get('user/pivot', function(){
//     $user = User::find(1);
//     foreach($user->roles as $role){
//         return $role->pivot->id;
//     }
// });

// Many to Many relationship
// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

//     return $user;
//     // foreach($user->roles as $role){
//     //     return $role->name;
//         // echo $post->title. "<br>";
//     // }
// });

// One to Many relationship
// Route::get('/posts', function(){
//     $user = User::find(1);
//     foreach($user->posts as $post){
//         echo $post->title. "<br>";
//     }
// });

// One to One relationship
// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post->title;
// });

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|*/
// Route::get('/forcedelete', function(){
//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('/readsoftdelete', function(){
//     // $post = Post::find(7);
//     // $post = Post::withTrashed()->where('id', 7)->get();
//     $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//     return $post;
// });

// Route::get('/softdelete', function(){
//     Post::find(10)->delete();
// });

// Route::get('/delete2', function(){
//     Post::destroy([3.,4]);
//     // Post::where('is_admin', 0)->delete();
// });

// Route::get('/delete', function(){
//     $post = Post::find(1);
//     $post->delete();
// });

// Route::get('/update', function(){
//     $post = Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New PHP Title', 'content'=>'I love my instructor']);
// });

// Route::get('/create', function(){
//     $post = Post::create(['title'=>'the create method3', 'content' => 'Wow I\'m learning']);
// });

// Route::get('/basicinsert2', function(){
//     $post = Post::find(3);
//     $post->title = 'New Eloquent title insert 2';
//     $post->content = 'Wow eloquent is really cool 2';
//     $post->save();
// });

// Route::get('/basicinsert', function(){
//     $post = new Post;
//     $post->title = 'New Eloquent title insert';
//     $post->content = 'Wow eloquent is really cool';
//     $post->save();    
// });

// Route::get('/findmore', function(){
//     $posts = Post::where('users_count', '<', 50)->first0rFail();
// });

// Route::get('/findwhere', function(){
//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/find', function(){
//     $post = Post::find(3);
//     return $post->title;
// });

// Route::get('/read', function(){
//     $posts = Post::all();
//     foreach($posts as $post) {
//         return $post->title;
//     }
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?', [1]);
//     return $deleted;
// });

// Route::get('/update', function(){
//     $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);
//     return $updated;
// });

// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id = ?', [1]);
//     return $results;
//     // foreach($results as $post){
//     //     return $post->title;
//     // }
// });

// Route::get('/insert', function(){
//     DB::insert('insert into posts(title, content) values(?, ?)', ['perl', 'old']);
// });


// Route::resource('posts', 'PostsController');

// Route::get('/contact', 'PostsController@contact');

// Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

// Route::get('/post/{id}', 'PostsController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function () {
//     return "hi I am contact";
// });

// Route::get('/post/{id}', function ($id) {
//     return "This is post number". $id;
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number ". $id. " ".$name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
//     $url = route('admin.home');
//     return "this url is ". $url;
// }));

// php artisan route:list