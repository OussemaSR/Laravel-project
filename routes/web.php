<?php

use Illuminate\Http\Request;

use App\Http\Controllers\ForumController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RenovationController;
use App\Http\Controllers\QuestionController; 
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SchedulerController;
use App\Http\Controllers\SubmitClientController;

use App\Http\Controllers\TestController;

use App\Mail\SmdevisMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/try',[RenovationController::class ,'getrenovation']);
Route::get('/getquestions',[QuestionController::class ,'getquestions'])->name('getquestions');
Route::get('/get_date',[SchedulerController::class ,'get_date'])->name('get_date');
Route::get('/call_scheduler',[SchedulerController::class,'call_scheduler'])->name('call_scheduler');
Route::post('/preserve', [FormController::class,'preserve'])->name('preserve');
Route::post('/save_data', [FormController::class,'save_data'])->name('save_data');
Route::post('try/upload', [FileUploadController::class,'upload'])->name('upload');
Route::post('try/delete', [FileUploadController::class,'delete'])->name('delete');





/*******for testing*/

Route::get('/send_mail', [TestController::class,'send_mail'])->name('send_mail');
Route::get('/mailing', [TestController::class,'mailing'])->name('mailing');

Route::get('/', function () {
    return view('index');
});


Route::get('/call-scheduler', function()
{
    return view('call-scheduler');
});


Route::get('/mentions_legales', function()
{
    return view('mentions_legales');
});




