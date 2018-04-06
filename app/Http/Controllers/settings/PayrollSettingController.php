<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayrollSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function setup(){

    return view('settings.payroll.setup');
    }
}
