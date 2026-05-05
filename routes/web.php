<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




// Show the admin login page
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.auth');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'seo_title' => 'Rasm - Nail Salon & Spa Beauty Care - About Us',
        'seo_description' => 'Discover the ultimate spa massage experience at Rasm. We offer personalized care, tranquil environments, and premium beauty services.',
        'seo_keywords' => 'nail salon, spa, beauty care, massage, wellness, relaxation'
    ]);
});


Route::get('/contact', function () {
    return view('contact', [
        'seo_title' => 'Rasm - Nail Salon & Spa Beauty Care - Contact Us',
        'seo_description' => 'Contact Rasm Nail Salon & Spa for appointments, inquiries, or feedback. We\'re here to provide you with exceptional beauty and spa services.',
        'seo_keywords' => 'contact nail salon, spa appointment, beauty services contact, book appointment, salon location'
    ]);
});

Route::get('/blogs', function () {
    return view('blogs', [
        'seo_title' => 'Rasm - Nail Salon & Spa Beauty Care - Blog List',
        'seo_description' => 'Read our latest blog posts about nail care, beauty treatments, spa services, and wellness tips from the experts at Rasm Nail Salon & Spa.',
        'seo_keywords' => 'nail salon blog, beauty tips, spa treatments, wellness advice, nail care tutorials'
    ]);
});


Route::get('/blog-details', function () {
    return view('blog-details', [
        'seo_title' => 'Rasm - Nail Salon & Spa Beauty Care - Blog Details',
        'seo_description' => 'Read our detailed blog post about maintaining health and beauty through spas. Discover expert tips and insights from Rasm Nail Salon & Spa professionals.',
        'seo_keywords' => 'spa treatments, beauty care, health benefits, relaxation techniques, nail care tips'
    ]);
});


Route::get('/courses', function () {
    return view('courses', [
        'seo_title' => 'Rasm - Nail Salon & Spa Beauty Care - Services',
        'seo_description' => 'Discover our wide range of beauty and spa services at Rasm Nail Salon & Spa. From body massages to nail art, we offer professional treatments to help you relax and rejuvenate.',
        'seo_keywords' => 'nail salon services, spa treatments, body massage, nail art, beauty care, aromatherapy, waxing, manicure, pedicure'
    ]);
});

Route::get('/course-detail', function () {
    return view('course-detail', [
        'seo_title' => 'Rasm - Nail Salon & Spa Beauty Care - Course Details',
        'seo_description' => 'Discover our professional beauty courses at Rasm Nail Salon & Spa. Learn from industry experts and enhance your skills in nail art, massage therapy, and beauty treatments.',
        'seo_keywords' => 'beauty courses, nail art training, massage therapy certification, spa education, beauty school, professional training'
    ]);
});