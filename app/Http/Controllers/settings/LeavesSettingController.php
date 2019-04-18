<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeavesSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function plans(){

    return view('settings.leaves.plans');
    }
}
