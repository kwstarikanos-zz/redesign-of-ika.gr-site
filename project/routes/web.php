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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/announcements', 'PagesController@announcements')->name('announcements');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/stores', 'PagesController@stores')->name('stores');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/profile', 'PagesController@profile')->name('profile')->middleware('auth');
Route::post('/profile', 'PagesController@profile')->name('profile')->middleware('auth');
Route::get('/profile/password_change', 'PagesController@password_change')->name('password_change')->middleware('auth');
Route::get('/search', 'PagesController@search')->name('search');
Route::get('/english', 'PagesController@english')->name('english');

Route::prefix('/insured')->group(function () {
    Route::get('/', 'PagesController@insured')->name('insured');
    Route::get('/Πιστοποίηση-ασφαλισμένου', 'PagesController@insured_a1')->name('insured.a1');
    Route::get('/Ασφαλιστική-ικανότητα', 'PagesController@insured_a2')->name('insured.a2');
    Route::get('/Ατομικός-λογαριασμός-ασφάλισης', 'PagesController@insured_a3')->name('insured.a3');
    Route::get('/Θεμελίωση-συνταξιοδοτικού-δικαιώματος', 'PagesController@insured_a4')->name('insured.a4');
    Route::post('/Θεμελίωση-συνταξιοδοτικού-δικαιώματος', 'PagesController@insured_a4_results')->name('insured.a4.results');
    Route::get('/Υποβολή-αίτησης-συνταξιοδότησης', 'PagesController@insured_a5')->name('insured.a5');
    Route::get('/Υπολογισμός-βασικού-ποσού-σύνταξης', 'PagesController@insured_a6')->name('insured.a6');


    Route::get('/Απογραφή-και-απόδοση-ασφαλιστικής-ικανότητας-έμμεσα-ασφαλισμένων', 'PagesController@insured_a7')->name('insured.a7');


    Route::post('/Απογραφή-και-απόδοση-ασφαλιστικής-ικανότητας-έμμεσα-ασφαλισμένων/Καρτέλα', 'PagesController@insured_a7_results')->name('insured.a7.results');


    Route::get('/Βεβαιώσεις', 'PagesController@insured_a8')->name('insured.a8');
    Route::post('/Βεβαιώσεις', 'PagesController@insured_a8_certification')->name('insured.a8.certification');
});

Route::prefix('/employer')->group(function () {
    Route::get('/', 'PagesController@employer')->name('employer');
    Route::get('/Ηλεκτρονική-Υποβολή-Α.Π.Δ.', 'PagesController@employer_a1')->name('employer.a1')->middleware('auth');
    Route::get('/Οικονομική-Καρτέλα-Εργοδότη', 'PagesController@employer_a2')->name('employer.a2')->middleware('auth');
    Route::get('/Μαζική-Ταυτοποίηση-Ασφαλισμένων', 'PagesController@employer_a3')->name('employer.a3')->middleware('auth');
    Route::get('/Βεβαίωση-Ασφαλιστικής-Ενημερότητας', 'PagesController@employer_a4')->name('employer.a4')->middleware('auth');

    Route::get('/Παροχή-ενσήμων-εργαζομένων', 'PagesController@employer_a5')->name('employer.a5')->middleware('auth');

    Route::post('/Παροχή-ενσήμων-εργαζομένων', 'PagesController@employer_a5')->name('employer.a5')->middleware('auth');


    Route::post('/Παροχή-ενσήμων-εργαζομένων/καρτέλα-εργαζομένου', 'PagesController@employer_a5_results')->name('employer.a5.results')->middleware('auth');
});

Route::get('/debtor', 'PagesController@debtor')->name('debtor');
Route::get('/coperator', 'PagesController@coperator')->name('coperator');
Route::get('/care', 'PagesController@care')->name('care');
Route::get('/kepa', 'PagesController@kepa')->name('kepa');

Auth::routes();

//footer
Route::get('/help', 'PagesController@help')->name('help');
Route::get('/terms', 'PagesController@terms')->name('terms');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/sitemap', 'PagesController@sitemap')->name('sitemap');
Route::get('/newsletter', 'PagesController@newsletter')->name('newsletter');

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/cookie/set', 'CookieController@setCookie');

Route::get('/cookie/get', 'CookieController@getCookie');