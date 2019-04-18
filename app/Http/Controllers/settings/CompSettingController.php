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

        return view('settings.company.companyinfo');
    }

    public function locations(){
        return view('settings.company.locations');
    }
    public function businessunits(){
            return view('settings.company.businessunits');
    }

    public function department(){
        return view('settings.company.department');
}

public function costcenters(){
    return view('settings.company.costcenters');
}

public function bands(){
    return view('settings.company.bands');
}
public function grades(){
    return view('settings.company.grades');
}
public function itinfo(){
    return view('settings.company.itinfo');
}

public function pfinfo(){
    return view('settings.company.pfinfo');
}

public function esiinfo(){
    return view('settings.company.esiinfo');
}

public function ptinfo(){
    return view('settings.company.ptinfo');
}
}
