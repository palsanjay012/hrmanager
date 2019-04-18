<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function jobtitles(){

    return view('settings.employee.jobtitles');
    }
}
