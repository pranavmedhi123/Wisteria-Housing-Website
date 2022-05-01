<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controlllers\MailController;
use App\Http\Controlllers\ComplainResponseController;
use App\Http\Controlllers\ResponseController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['middleware' => ['web']], function () {

Route::get('/',[PageController::class, 'homepage']);
Route::get('/aboutus',[PageController::class, 'aboutus']);
Route::get('/contactus',[PageController::class, 'contactus']);
Route::match(['get', 'post'],'/btnsubmit',[PageController::class, 'btnsubmit']);

Route::get('/signup',[PageController::class, 'signup']);

Route::match(['get', 'post'],'/signupinsert',[PageController::class, 'signupinsert']);

Route::get('/login',[PageController::class, 'login']);

Route::match(['get', 'post'],'/logininsert',[PageController::class, 'logininsert']);

Route::get('/adminhome',[PageController::class, 'adminhome']);

Route::get('/admindashboard',[PageController::class, 'admindashboard']);

Route::get('/ownerdetails',[PageController::class, 'ownerdetails']);

Route::match(['get', 'post'],'/Delete',[PageController::class, 'Delete']);

Route::get('/messages',[PageController::class, 'messages']);

Route::match(['get', 'post'],'/sendresponse',[PageController::class, 'sendresponse']);

Route::get('/subdivisionhome',[PageController::class, 'subdivisionhome']);

Route::get('/subdivisiondashboard',[PageController::class, 'subdivisiondashboard']);

Route::get('/subdivision_resident_details',[PageController::class, 'residentdetails']);

Route::match(['get', 'post'],'/subdivision_create_reports',[PageController::class, 'createreports']);

Route::match(['get', 'post'],'/subdivision_create_reports_delete',[PageController::class, 'deletereports']);

Route::match(['get','post'],'/Subdivision_contact_superuser',[PageController::class, 'subdivcontactsuperuser']);

Route::get('/buildinghome',[PageController::class, 'buildinghome']);

Route::match(['get','post'],'/buildingcontactus',[PageController::class, 'buildingcontactus']);

Route::get('/buildingdashboard',[PageController::class, 'buildingdashboard']);

Route::get('/Building_owner_apartmentdetails',[PageController::class, 'Building_owner_apartmentdetails']);

Route::match(['get','post'],'/buildingviewcomplaints',[PageController::class, 'buildingviewcomplaints']);

Route::get('/apartmenthome',[PageController::class, 'apartmenthome']);

Route::get('/apartmentdashboard',[PageController::class, 'apartmentdashboard']);

Route::match(['get','post'],'/Apartment_owner_file_complaint',[PageController::class, 'Apartment_owner_file_complaint']);

Route::match(['get', 'post'],'/viewcomplaintsresponse',[PageController::class, 'viewcomplaintsresponse']);

Route::get('MailController',[App\Http\Controllers\MailController::class,'basic_email'])->name('MailController');

Route::get('ResponseController',[App\Http\Controllers\ResponseController::class,'response'])->name('ResponseController');

Route::get('ComplainResponseController',[App\Http\Controllers\ComplainResponseController::class,'complainresponse'])->name('ComplainResponseController');

});







