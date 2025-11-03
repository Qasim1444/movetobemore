<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController as AdminPostController;

Route::prefix('admin')->name('admin.')->group(function () {
	// Optionally add middleware like ->middleware('auth')

	// Index
	Route::get('posts', [AdminPostController::class, 'index'])->name('posts.index');

	// Create + Store
	Route::get('posts/create', [AdminPostController::class, 'create'])->name('posts.create');
	Route::post('posts', [AdminPostController::class, 'store'])->name('posts.store');

	// Show
	Route::get('posts/{post}', [AdminPostController::class, 'show'])->name('posts.show');

	// Edit + Update
	Route::get('posts/{post}/edit', [AdminPostController::class, 'edit'])->name('posts.edit');
	Route::put('posts/{post}', [AdminPostController::class, 'update'])->name('posts.update');

	// Destroy
	Route::delete('posts/{post}', [AdminPostController::class, 'destroy'])->name('posts.destroy');
});


Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
    // Validate the request
    request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ]);

    // Here you could add code to send email if needed
    // Mail::to('your@email.com')->send(new ContactFormMail(request()->all()));

    return redirect('/contact')->with('success', 'Thank you for your message. We will get back to you soon!');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/privacy', function () {
    return view('pages.privacy');
});
