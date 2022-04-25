<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Nette\Schema\Expect;

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

// Route::get('/', function () {
//     return view('index');
// })->name('home');
//Route::get('/admin/activity/main' , [App\Http\Controllers\admin\ActivityController::class,'act_main'])->name('activity-main');


//Route::auth();

Auth::routes();

Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoignController::class, 'showAdminLoginForm']);
Route::post('/admin/login/ok', [App\Http\Controllers\Auth\AdminLoignController::class,'adminLogin']);
Route::get('/logout', [App\Http\Controllers\Auth\AdminLoignController::class,'logout']);

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin/index', function () {
        return view('admin.index');
    })->name('admin.home');

route::resource('admin/partner' , App\Http\Controllers\PartnerController::class);
route::get('admin/partner/{id}/destroy' , [App\Http\Controllers\PartnerController::class,'destroy']);
route::resource('admin/supporter' , App\Http\Controllers\SupporterController::class);
route::get('admin/supporter/{id}/destroy' , [App\Http\Controllers\SupporterController::class,'destroy']);
//route::resource('admin/admin',[ App\Http\Controllers\AdminController::class]);
route::get('/admin/show-our-message',[ App\Http\Controllers\AdminController::class,'showOurMessage']);
route::put('/admin/update-our-message',[ App\Http\Controllers\AdminController::class,'updateOurMessage']);
route::get('/admin/show-social-accounts',[ App\Http\Controllers\AdminController::class,'showSocialAcconuts']);
route::put('/admin/update-social-accounts',[ App\Http\Controllers\AdminController::class,'updateSocialAcconuts']);
route::get('/admin/show-bank-accounts',[ App\Http\Controllers\AdminController::class,'showBankAcconuts']);
route::put('/admin/update-bank-accounts',[ App\Http\Controllers\AdminController::class,'updateBankAcconuts']);
route::get('/admin/show-boss-speach',[ App\Http\Controllers\AdminController::class,'bossSpeach']);
route::put('/admin/update-boss-speech',[ App\Http\Controllers\AdminController::class,'bossSpeachUpdate']);
route::get('admin/admin',[ App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
route::get('admin/admin/create',[ App\Http\Controllers\AdminController::class,'create'])->name('admin.create');
route::get('admin/admin/edit/{admin}',[ App\Http\Controllers\AdminController::class,'edit'])->name('admin.edit');
route::post('admin/admin/store',[ App\Http\Controllers\AdminController::class,'store'])->name('admin.store');
route::put('admin/admin/update/{admin}',[ App\Http\Controllers\AdminController::class,'update'])->name('admin.update');
route::get('admin/admin/{admin}',[ App\Http\Controllers\AdminController::class,'destroy'])->name('admin.destroy');
route::resource('admin/goal-main' , App\Http\Controllers\admin\GoalMainController::class);
route::get('admin/goal-main/{goal_main}' , [App\Http\Controllers\admin\GoalMainController::class,'destroy']);
route::resource('admin/activity' , App\Http\Controllers\admin\ActivityController::class);
route::resource('admin/slider' , App\Http\Controllers\admin\SliderController::class);
/* route::get('admin/slider/{slider}' , [App\Http\Controllers\admin\SliderController::class,'destroy']);*/route::resource('admin/news' , App\Http\Controllers\admin\NewsController::class);
route::resource('admin/initiative' , App\Http\Controllers\InitiativeController::class);
route::resource('admin/orgchart' , App\Http\Controllers\admin\OrgchartController::class);
route::resource('admin/workschedule' , App\Http\Controllers\admin\WorkscheduleController::class);
route::resource('admin/orgpolicy' , App\Http\Controllers\admin\OrgpolicyController::class);
route::resource('admin/staff' , App\Http\Controllers\admin\StaffController::class);
Route::resource('admin/meeting', App\Http\Controllers\admin\MeetingController::class);
route::resource('admin/actmain' , App\Http\Controllers\admin\ActmainController::class);

Route::get('/admin/report/index', 'App\Http\Controllers\admin\ReportController@index');
Route::get('/admin/report/create', 'App\Http\Controllers\admin\ReportController@create');
Route::post('/admin/report/store', 'App\Http\Controllers\admin\ReportController@store');
Route::get('/admin/report/delete/{id}', 'App\Http\Controllers\admin\ReportController@destroy');
Route::get('/admin/yearly-report/index', 'App\Http\Controllers\admin\YearlyReportController@index');
Route::get('/admin/yearly-report/create', 'App\Http\Controllers\admin\YearlyReportController@create');
Route::post('/admin/yearly-report/store', 'App\Http\Controllers\admin\YearlyReportController@store');
Route::get('/admin/yearly-report/delete/{id}', 'App\Http\Controllers\admin\YearlyReportController@destroy');

Route::get('/admin/popups', 'App\Http\Controllers\AdminController@popups');
Route::put('/admin/popups/update', 'App\Http\Controllers\AdminController@updatePopups');
Route::get('/admin/aboutus', 'App\Http\Controllers\AdminController@aboutus');
Route::put('/admin/aboutus/update', 'App\Http\Controllers\AdminController@updateAboutus');
});



Route::get('/activities',[App\Http\Controllers\HomeController::class,'showActivities']);
Route::get('/activity/{id}',[App\Http\Controllers\HomeController::class,'showActivity']);
Route::get('/activity-main/{id}',[App\Http\Controllers\HomeController::class,'showMainActivity']);
Route::get('/council-members',[App\Http\Controllers\HomeController::class,'showCouncil']);
Route::get('/creator-members',[App\Http\Controllers\HomeController::class,'showCreator']);
Route::get('/reports',[App\Http\Controllers\HomeController::class,'showReport']);
Route::get('/news',[App\Http\Controllers\HomeController::class,'showNews']);
Route::get('/news/{id}',[App\Http\Controllers\HomeController::class,'showSingleNews']);
Route::get('/policies',[App\Http\Controllers\HomeController::class,'showPolicies']);
Route::get('/show-meetings',[App\Http\Controllers\HomeController::class,'showMeeting']);
Route::get('/structure',[App\Http\Controllers\HomeController::class,'showStructure']);
Route::get('/scheduling',[App\Http\Controllers\HomeController::class,'showScheduling']);
Route::post('/yearly-report/search',[App\Http\Controllers\HomeController::class,'searchYearly']);
Route::get('/yearly-reports',[App\Http\Controllers\HomeController::class,'showYearly']);
route::get('/boss-speach', 'App\Http\Controllers\HomeController@bossSpeach');
route::get('/contact-us', 'App\Http\Controllers\HomeController@contactus');
route::post('/contact-us/store', 'App\Http\Controllers\HomeController@storeContactus');
route::get('/',[App\Http\Controllers\HomeController::class,'index']);
route::get('/subscribe', 'App\Http\Controllers\HomeController@subscribe');
route::get('/initiatives', 'App\Http\Controllers\HomeController@showInit');
Route::get('/initiative/details/{id}',[App\Http\Controllers\HomeController::class,'showSingleInit']);
// route::get('/', function()
// {
//     return redirect('/home');
// });

