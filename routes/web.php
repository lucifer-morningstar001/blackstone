<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('auths.login');
});
// login page

Route::get('/login', [AuthController::class, 'login'])->name('login');
// forgot password page
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
// register page
Route::get('/register', [AuthController::class, 'register'])->name('register');

// dashboard page
Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');
// profile page
Route::get('/profile', [MemberController::class, 'profile'])->name('profile');
//change password page
Route::get('/change-password', [MemberController::class, 'changePassword'])->name('change-password');
// generate referral link
Route::get('/generate-referral', [MemberController::class, 'generateReferral'])->name('generate_referral');
// package page
Route::get('/packages', [MemberController::class, 'packages'])->name('packages');
// packages history page
Route::get('/packages-history', [MemberController::class, 'packagesHistory'])->name('packages_history');
// kyc page
Route::get('/kyc', [MemberController::class, 'kyc'])->name('kyc');
// referral list page
Route::get('/referral-list', [MemberController::class, 'referralList'])->name('referral_list');
// all income report page
Route::get('/all-income-report', [MemberController::class, 'allIncomeReport'])->name('all_income_report');
// withdrawal history page
Route::get('/withdrawal-history', [MemberController::class, 'withdrawalHistory'])->name('withdrawal_history');
// support page
Route::get('/support', [MemberController::class, 'support'])->name('support');
// direct income page
Route::get('/direct-income', [MemberController::class, 'directIncome'])->name('direct_income');

route::get('/roi-income', [MemberController::class, 'roiIncome'])->name('roi_income');
// single complaint page
Route::get('/single-complaint', [MemberController::class, 'singleComplaint'])->name('single_complaint');
// withdrawal page
Route::get('/withdrawal', [MemberController::class, 'withdrawal'])->name('withdrawal');
// website page
Route::get('/website', [AuthController::class, 'website'])->name('website');

if (app()->environment('local')) {
    Route::get('/email-preview/register', function () {
        return view('emails.register', ['name' => 'Aurum Member']);
    })->name('email-preview.register');

    Route::get('/email-preview/forget-password', function () {
        return view('emails.forget_password', [
            'name' => 'Aurum Member',
            'resetUrl' => route('forgot'),
        ]);
    })->name('email-preview.forget-password');
}

// create support ticket page
Route::get('/create-support', [MemberController::class, 'createSupport'])->name('create_support');
// view support ticket page
// admin pages

// admin login page
Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
// admin dashboard page
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
// all users page
Route::get('/admin/all-users', [AdminController::class, 'allUsers'])->name('admin.all_users');
// withdraw_fund_requests
Route::get('/admin/withdraw-fund-requests', [AdminController::class, 'withdrawFundRequests'])->name('withdraw_fund_requests');
// withdraw_fund_responsed
Route::get('/admin/withdraw-fund-responsed', [AdminController::class, 'withdrawFundResponsed'])->name('withdraw_fund_responsed');
// kyc requests
Route::get('/admin/kyc-requests', [AdminController::class, 'kycRequests'])->name('admin.kyc_requests');
// total bonus
Route::get('/admin/total-bonus', [AdminController::class, 'totalBonus'])->name('admin.total_bonus');
// admin ROI settings and income reports
Route::get('/admin/change-roi-percentage', [AdminController::class, 'changeRoiPercentage'])->name('admin.change_roi_percentage');
Route::get('/admin/direct-income', [AdminController::class, 'directIncomeReport'])->name('admin.direct_income_report');
Route::get('/admin/roi', [AdminController::class, 'roiReport'])->name('admin.roi_report');
// support page
Route::get('/admin/support', [AdminController::class, 'support'])->name('admin.support');
// resolved page

Route::get('/admin/type1_resolved', [AdminController::class, 'type1_resolved'])->name('admin.type1_resolved');
// type1
Route::get('/admin/type1', [AdminController::class, 'type1'])->name('admin.type1');
// /single_complaint
Route::get('/admin/single_complaint', [AdminController::class, 'singlecomplaint'])->name('admin.single_complaint');
