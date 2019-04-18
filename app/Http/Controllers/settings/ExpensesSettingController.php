<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpensesSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function policies(){

    return view('settings.expenses.policies');
    }
}
