<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntegrationsSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    return view('settings.integrations.index');
    }
}
