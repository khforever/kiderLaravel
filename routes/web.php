<?php
use App\Http\Controllers\KiderController;
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

Route::get('/', function () 
{
    return view('welcome');
});

//Route::fallback(KiderController::class);

Route::group(["prefix"=>"Kidder","as"=>"Kidder."],function(){
    Route::get("/",[KiderController::class,'index'])->name("index");
    Route::get("About",[KiderController::class ,"about"])->name("about");
    Route::get("Classes",[KiderController::class,"classes"])->name("classes");
    Route::get("Contact",[KiderController::class,'contact'])->name("contact");
    Route::get("Facilities",[KiderController::class,"facilities"])->name("Facilities");
    Route::get("teacher",[KiderController::class,"teacher"])->name("teachers");
    Route::get("BecomeTeacher",[KiderController::class,"call"])->name("call");
    Route::get("testimonial",[KiderController::class,"Testimonial"])->name("Testimonial");
    Route::get("Appointment",[KiderController::class,"Appointment"])->name("Appointment");
    //Route::get("x",[KiderController::class,"xxx"])->name("x");

});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
