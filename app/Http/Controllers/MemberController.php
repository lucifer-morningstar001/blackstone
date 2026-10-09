<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
  public function dashboard()
  {
    return view('members.pages.dashboard');
  }
  public function profile()
    {
        return view('members.pages.profile');
    }
    public function changePassword()
    {
        return view('members.pages.change-password');
    }
    public function generateReferral()
    {
        return view('members.pages.generate-referral');
    }
    public function packages()
    {
        return view('members.pages.packages');
    }
    public function packagesHistory()
    {
        return view('members.pages.packages-history');
    }
    public function kyc()
    {
        return view('members.pages.kyc');
    }
    public function referralList()
    {
        return view('members.pages.referral-list');
    }
    public function allIncomeReport()
    {
        return view('members.pages.all-income-report');
    }
    public function withdrawalHistory()
    {
        return view('members.pages.withdrawal-history');
    }
    public function support()
    {
        return view('members.pages.support');
    }
    public function directIncome()
    {
        return view('members.pages.direct-income');
    }
    public function roiIncome()
    {
        return view('members.pages.roi-income');
    }
    public function singleComplaint()
    {
        return view('members.pages.single-complaint');
    }
    public function withdrawal()
    {
        return view('members.pages.withdrawal');
    }
    public function createSupport()
    {
        return view('members.pages.create-support-ticket');
    }
}
