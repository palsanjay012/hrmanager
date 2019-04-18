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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/introduction', function () {
    return view('guest.introduction');
});
Route::get('/features', function () {
    return view('guest.features');
});
Route::get('/prices', function () {
    return view('guest.prices');
});

Auth::routes();
/**************** Admin settings routs Start *****************/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/settings/company/general', 'settings\CompSettingController@general')->name('settings.company.general');
Route::get('/settings/company/legalentities/companyinfo', 'settings\CompSettingController@companyinfo')->name('settings.company.companyinfo');
Route::get('/settings/company/legalentities/itinfo', 'settings\CompSettingController@itinfo')->name('settings.company.itinfo');

Route::get('/settings/company/legalentities/pfinfo', 'settings\CompSettingController@pfinfo')->name('settings.company.pfinfo');
Route::get('/settings/company/legalentities/esiinfo', 'settings\CompSettingController@esiinfo')->name('settings.company.esiinfo');
Route::get('/settings/company/legalentities/ptinfo', 'settings\CompSettingController@ptinfo')->name('settings.company.ptinfo');





Route::get('/settings/company/locations', 'settings\CompSettingController@locations')->name('settings.company.locations');
Route::get('/settings/company/businessunits', 'settings\CompSettingController@businessunits')->name('settings.company.businessunits');
Route::get('/settings/company/department', 'settings\CompSettingController@department')->name('settings.company.department');
Route::get('/settings/company/costcenters', 'settings\CompSettingController@costcenters')->name('settings.company.costcenters');
Route::get('/settings/company/bands', 'settings\CompSettingController@bands')->name('settings.company.bands');
Route::get('/settings/company/grades', 'settings\CompSettingController@grades')->name('settings.company.grades');



Route::get('/settings/payroll/setup', 'settings\PayrollSettingController@setup')->name('settings.payroll.setup');
Route::get('/settings/leaves/plans', 'settings\LeavesSettingController@plans')->name('settings.leaves.plans');
Route::get('/settings/employee/jobtitles', 'settings\EmployeeSettingController@jobtitles')->name('settings.employee.jobtitles');
Route::get('/settings/timesheet/costing/general', 'settings\TimesheetSettingController@general')->name('settings.costing.general');
Route::get('/settings/expenses/policies', 'settings\ExpensesSettingController@policies')->name('settings.expenses.policies');
Route::get('/settings/timeattendance/weeklyoffs', 'settings\TimeattendanceSettingController@weeklyoffs')->name('settings.timeattendance.weeklyoffs');
Route::get('/settings/onboardingexit/welcomescreen', 'settings\OnboardingexitSettingController@welcomescreen')->name('settings.onboardingexit.welcomescreen');
Route::get('/settings/roles/userroles', 'settings\RolesSettingController@userroles')->name('settings.roles.userroles');
Route::get('/settings/integrations', 'settings\IntegrationsSettingController@index')->name('settings.integrations.index');
/**************** Admin settings routs End **************** */



//Route::get('/admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
//Route::post('logout','Admin\LoginController@logout')->name('admin.logout');;
Route::post('/admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('/admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/admin-register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin-register','Admin\RegisterController@register');
Route::get('/admin/users', 'Admin\UserController@index')->name('admin.user.user');

//  Route::get('/admin/users', function () {
//      //$placa = General::classActivePath('admin.home');
//      $General = new General;
//     echo  $General->classActivePath('admin.home');
// });
