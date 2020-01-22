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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/blog', 'PublicPostsController@index')->name('blog');
Route::get('/blog/{post}', 'PublicPostsController@show')->name('blog.post');
Route::post('/subscribe', 'SubscribersController@store')->name('subscriber.store');
Route::get('/unsubscribe', 'SubscribersController@destroy')->name('subscriber.destroy');
Route::get('/subscribe-confirmation', 'SubscribersController@update')->name('subscriber.update');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/portfolio', 'PublicProjectController@index')->name('portfolio');

Route::middleware(['auth'])->prefix('/admin')->group(function () {
    Route::get('/', 'HomeController@dashboard')->name('dashboard');
    Route::resources([
        'categories' => 'CategoriesController',
        'tags' => 'TagsController',
        'posts' => 'PostsController',
        'projects' => 'ProjectsController',
        'profiles' => 'ProfilesController'
    ]);
    Route::delete('/project-image-delete/{projectImage}', 'ProjectImageController@destroy')->name('projectImage.delete');
    Route::get('subscribers', 'SubscribersController@index')->name('subscribers.index');

    Route::post('/post-upload-image', 'PostImageController@store')->name('image.store');

    // Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
    // Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
    // Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
});
