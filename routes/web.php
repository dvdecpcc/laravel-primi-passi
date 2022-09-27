<?php

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
    $title= 'Ciao?';
    $subtitle='ciao ciao!';
    return view('firstPage', [
        'myTitle'=> $title,
        'mySubTitle'=>$subtitle
    ]);
})->name('firstPage');

Route::get('/secondPage', function(){
    $secondPageTitle = 'Sto usando Laravel!';
    $secondPageText = 'Spero di usarlo bene...';
    return view('secondPage', [
        'myText'=> $secondPageTitle,
        'mySubText'=>$secondPageText
    ]);
})->name('secondPage');


Route::get('/thirdPage', function(){
    $thirdPageTitle = 'Sto usando ancora Laravel!';
    $thirdPageText = 'Spero sempre di usarlo bene...';
    return view('thirdPage', [
        'myThird'=> $secondPageTitle,
        'mySubTitle'=>$secondPageText
    ]);
})->name('thirdPage');

