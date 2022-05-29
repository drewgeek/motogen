<?php

use App\Mail\AcademyEnquiryMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\FindInstallerMail;
use App\Mail\ThankYouMail;

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

Route::view('/', 'coming_soon')->name('home');
Route::view('/fr', 'frwelcome')->name('homefr');
Route::view('about', 'about')->name('about');
Route::view('aboutfr', 'aboutfr')->name('aboutfr');
Route::view('academy', 'academy')->name('academy');
Route::view('academyfr', 'academyfr')->name('academyfr');
Route::view('axle', 'axle')->name('axle');
Route::view('axlefr', 'axlefr')->name('axlefr');
Route::view('contact', 'contact')->name('contact');
Route::view('contactfr', 'contactfr')->name('contactfr');
Route::view('engine', 'engine')->name('engine');
Route::view('enginefr', 'enginefr')->name('enginefr');
Route::view('gearbox', 'gearbox')->name('gearbox');
Route::view('gearboxfr', 'gearboxfr')->name('gearboxfr');
Route::view('installer', 'installer')->name('installer');
Route::view('installerfr', 'installerfr')->name('installerfr');

Route::post('contactform', function(){

        request()->validate([
            'firstname' => 'bail|required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'vin' => 'required',
            'notes' => 'required',
        ]);

        Mail::to('info@motongen.com')
    ->send(new Contact(request()->toArray()));

    if(Mail::failures()){
         return back()->withInput()->withErrors('Error sending mail. Please retry');
    }

    Mail::to(request('email'))->send(new ThankYouMail(request('firstname')));

    return back()->with('message', 'Your message is succcessfully received');

});

Route::post('academy', function(){

    request()->validate([
        'firstname' => 'bail|required',
        'lastname' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'startDate' => 'required',
        'duration' => 'required',
        'notes' => 'required',
    ]);

    Mail::to('info@motongen.com')
    ->send(new AcademyEnquiryMail(request()->toArray()));

    if(Mail::failures()){
         return back()->withInput()->withErrors('Error sending mail. Please retry');
    }

    Mail::to(request('email'))->send(new ThankYouMail(request('firstname')));

    return back()->with('message', 'Your message is succcessfully received');

});

Route::post('installer', function(){

    request()->validate([
        'firstname' => 'bail|required',
        'lastname' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'state' => 'required',
        'city' => 'required',
        'brand' => 'required',
        'model' => 'required',
        'year' => 'required',
        'vin' => 'required',
        'part' => 'required',
        'notes' => 'required',
    ]);

    Mail::to('info@motongen.com')
    ->send(new FindInstallerMail(request()->toArray()));

    if(Mail::failures()){
         return back()->withInput()->withErrors('Error sending mail. Please retry');
    }

    Mail::to(request('email'))->send(new ThankYouMail(request('firstname')));

    return back()->with('message', 'Your message is succcessfully received');

});


