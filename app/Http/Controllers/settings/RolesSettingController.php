<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userroles(){

    return view('settings.roles.userroles');
    }
}
