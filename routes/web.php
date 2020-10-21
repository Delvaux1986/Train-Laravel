<?php

function Securisation($donnees){ 
    $donnees = htmlspecialchars($donnees); 
    $donnees = trim($donnees); 
    $donnees = stripcslashes($donnees); 
    $donnees = strip_tags($donnees); 
    return $donnees; 

}  

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

Route::get('/minichat', function () {
    $messages = DB::table('minichat')->get();
    return view('minichat' , compact('messages'));
});

Route::resource('message', MessageController::class);

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/mail' , function() {
    $title = 'Mail from ' .Securisation($_POST['name']).' '.Securisation($_POST['prenom']). '.';
    $body = 'MSG : ' .Securisation($_POST['msg']). '\nSon adresse mail est : '.Securisation($_POST['mail']);
    
    $details = [
        'title' => $title,
        'body' => $body
    ];
   
    \Mail::to('dualvex86@gmail.com')->send(new \App\Mail\SendMail($details));
    dd("Email is Sent.");
});

Route::get('/folio', function () {
    return view('folio');
});

Route::get('/about', function () {
    return view('about');
});