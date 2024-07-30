<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StudentController;
use App\Models\DefaultPackageOneYearDegree;
use App\Http\Controllers\EndowmentController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\FundAProjectController;
use App\Http\Controllers\SignatureStoryController;
use App\Http\Controllers\DashboardEndowmentController;
use App\Http\Controllers\SupportScholarPaymentController;
use App\Http\Controllers\DefaulPackagetFullDegreeController;
use App\Http\Controllers\DefaultPackageOneYearDegreeController;
use App\Http\Controllers\DefaultPackagePerpetualSeatController;

// Home Screens
Route::get('/', [HomeController::class, 'index']);
Route::get('/r_m_o', [HomeController::class, 'r_m_o_page']);
Route::get('/about_us', [HomeController::class, 'about_us']);
Route::get('/contact_us', [HomeController::class, 'contact_us']);
Route::post('/contactus', [HomeController::class, 'message']);

Route::get('/meet_out_team/{id}', [TeamController::class, 'meet_team']);
Route::get('/students', [StudentController::class, 'index']);

// Stories screens
Route::get('/student_stories', [StudentController::class, 'student_stories']);
// Route::get('/student_stories_indiviual/{id}', [StudentController::class, 'stuedent_stories_ind']);
Route::get('student_stories_indiviual/{id}', [StudentController::class, 'student_stories_ind']);

Route::get('/payment/{id}', [SupportScholarPaymentController::class, 'payment_index']);
Route::get('/Make_a_Pledge/{id}', [SupportScholarPaymentController::class, 'Make_a_Pledge']);
Route::post('/payments', [SupportScholarPaymentController::class, 'store']);
Route::post('/pledge_payment', [SupportScholarPaymentController::class, 'pledge_store']);
// approved
Route::post('pledge_approved/{id}', [SupportScholarPaymentController::class, 'approved_pledge']);
Route::post('payment_approved/{id}', [SupportScholarPaymentController::class, 'approved_payment']);

// support a degree one year
// Route::get('endowment_model', [EndowmentController::class, 'index']);
Route::get('endowment_model', [EndowmentController::class, 'index']);
Route::get('support_for_one_year', [EndowmentController::class, 'one_year_index']);
Route::post('endowmentsupportoneyear', [EndowmentController::class, 'one_year_store']);
Route::get('support_for_entire_year', [EndowmentController::class, 'entire_index']);
Route::post('endowmentsupportentireyear', [EndowmentController::class, 'entire_store']);


Route::get('perpetualseatyourname', [EndowmentController::class, 'Perpetual_index']);
Route::post('perpetualseatyourname', [EndowmentController::class, 'Perpetual_store']);
Route::get('zakat_for_students', [EndowmentController::class, 'zakat']);
Route::get('zakat_Make_a_Pledge', [EndowmentController::class, 'zakat_Make_a_Pledge']);
Route::get('zakat_payment', [EndowmentController::class, 'zakat_payment']);
Route::post('zakat_payments', [EndowmentController::class, 'store_zakat']);

// Default package routes
Route::post('default_package_full_degree', [DefaulPackagetFullDegreeController::class, 'full_degree_store']);
Route::post('default_one_year_degree', [DefaultPackageOneYearDegreeController::class, 'one_year_degree_store']);
Route::post('default_perpetual_seat', [DefaultPackagePerpetualSeatController::class, 'default_perpetual_seat_store']);



// Funds the project routes

Route::get('/select_project', [FundAProjectController::class, 'select_project_fund']);
Route::get('/fund_project/{id}', [FundAProjectController::class, 'fund_project_screen']);
Route::get('/payments_project/{id}', [FundAProjectController::class, 'payments_project']);
Route::post('/fund_a_project', [FundAProjectController::class, 'payment_fund_a_project']);

// team
Route::get('/our_team', [TeamController::class, 'team']);



Route::get('/students_get', [authController::class, 'view_data']);
Route::get('/add_students', [authController::class, 'store']);
Route::get('/students_edit/{id}', [authController::class, 'edit']);
Route::post('/students_update/{id}', [authController::class, 'update']);
// Route::get('/students_add', [authController::class, 'store']);

// signature storires Routes
Route::get('/signature_stories', [SignatureStoryController::class, 'index']);
Route::post('/signature_stories_store', [SignatureStoryController::class, 'store']);
Route::get('/signature_stories_list', [SignatureStoryController::class, 'show']);
Route::get('/signature_stories_edit/{id}', [SignatureStoryController::class, 'edit']);
Route::post('/signature_stories_update/{id}', [SignatureStoryController::class, 'update']);
Route::get('/signature_stories_delete/{id}', [SignatureStoryController::class, 'destroy']);
// index route
Route::get('/signrature_program', [SignatureStoryController::class, 'signrature_program']);


// Dashboard Screens Routes
Route::get('/dashboard', [authController::class, 'index']);
Route::get('/contact_us_message', [authController::class, 'messages']);

// Team routes

Route::get('add_team', [TeamController::class, 'index']);
Route::post('add_team_member', [TeamController::class, 'store']);
Route::get('team_list', [TeamController::class, 'show']);
Route::get('team_edit/{id}', [TeamController::class, 'edit']);
Route::post('update_team/{id}', [TeamController::class, 'update']);
Route::get('team_delete/{id}', [TeamController::class, 'destory']);


Route::get('one_year_education', [DashboardEndowmentController::class, 'one_year']);
Route::get('entire_degree_education', [DashboardEndowmentController::class, 'entire_degree']);
Route::get('perpetual_seat_in__your__name', [DashboardEndowmentController::class, 'perpetual_seat']);
Route::get('zakat_support', [DashboardEndowmentController::class, 'zakat_support_for_student']);

Route::get('suport_scholor_payment', [DashboardEndowmentController::class, 'scholor_payment']);
Route::get('suport_scholor_pledge', [DashboardEndowmentController::class, 'scholor_pledge']);
Route::get('fundaproject', [DashboardEndowmentController::class, 'fund_project']);
Route::get('fundaproject', [DashboardEndowmentController::class, 'fund_project']);



Route::get('login', [CredentialController::class, 'index']);
Route::post('login', [CredentialController::class, 'login']);
Route::post('register', [CredentialController::class, 'store_user']);
Route::get('logout', [CredentialController::class, 'logout']);


// Route::get('dashboard2', [authController::class, 'index2']);

// User Routes
Route::get('user_list', [UserController::class, 'index']);
Route::get('create', [UserController::class, 'create']);
Route::post('store_user', [UserController::class, 'store']);

Route::get('edit/{id}', [UserController::class, 'edit']);
Route::post('update/{id}', [UserController::class, 'update']);
Route::get('delete/{id}', [UserController::class, 'delete']);


Route::get('event_list', [EventController::class, 'index']);
Route::get('event_create', [EventController::class, 'create']);
Route::post('event_create', [EventController::class, 'store']);
Route::get('event_delete/{id}', [EventController::class, 'delete']);
