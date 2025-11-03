<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/privacy', function () {
    return view('pages.privacy');
});
