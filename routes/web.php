<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Web\Local\LocalizationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// localization 
Route::get("change/{lang}" , function($lang) {
        if($lang == "ar")
        {
            session()->put("lang" , "ar") ; 
        }else
        {
          session()->put("lang" , "en") ;
        }
        return redirect()->back() ; 
})->name('change');


// website 
// Route::get('language/{lang}', [LocalizationController::class, 'changeLanguage'])->name('changeLanguage');




















// admin 
Route::prefix('dashboard')->group(function(){
    Route::get('/' , [HomeController::class , 'index'])->name('/')->middleware('language');
});















