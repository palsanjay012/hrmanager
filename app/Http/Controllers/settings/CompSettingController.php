<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompSettingController extends Controller
{
    //
    //
     public function __construct()
        {
            $this->middleware('auth');
        }
    public function general(){

      return view('settings.company.general');
    }

    public function companyinfo(){

        return view('settings.company.general');
    }

    public function locations(){
        return view('settings.company.general');
    }
    public function businessunits(){
            return view('settings.company.general');
    }

    public function department(){
        return view('settings.company.general');
}

public function costcenters(){
    return view('settings.company.general');
}

public function bands(){
    return view('settings.company.general');
}
public function grades(){
    return view('settings.company.general');
}
public function itinfo(){
    return view('settings.company.general');
}public function pfinfo(){
    return view('settings.company.general');
}public function esiinfo(){
    return view('settings.company.general');
}public function ptinfo(){
    return view('settings.company.general');
}
}
