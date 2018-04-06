<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeattendanceSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function weeklyoffs(){

    return view('settings.timeattendance.weeklyoffs');
    }
}
