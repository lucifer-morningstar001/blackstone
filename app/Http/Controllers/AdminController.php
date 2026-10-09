<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminLogin()
    {
        return view('admin.pages.admin_login');
    }   
    public function adminDashboard()
    {
        return view('admin.pages.dashboard');
    }
    public function allUsers()
    {
        return view('admin.pages.all_users');
    }
    public function withdrawFundRequests()
    {
        return view('admin.pages.withdraw_fund_requests');
    }
public function withdrawFundResponsed()
    {
        return view('admin.pages.withdraw_fund_responsed');
    }
    public function kycRequests()
    {
        return view('admin.pages.kyc_requests');
    }
    public function totalBonus()
    {
        return view('admin.pages.total_bonus');
    }
    public function changeRoiPercentage()
    {
        return view('admin.pages.change_roi_percentage');
    }
    public function directIncomeReport()
    {
        return view('admin.pages.direct_income_report');
    }
    public function roiReport()
    {
        return view('admin.pages.roi_report');
    }
    public function support () {
         return view('admin.pages.support');
    }
    // 
      public function type1_resolved () {
         return view('admin.pages.type1_resolved');
    }
         public function type1 () {
         return view('admin.pages.type1');
    }
    public function singlecomplaint() {
          return view('admin.pages.singlecomplaint');
    }
}
