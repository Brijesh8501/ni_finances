<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;

class Adcontroller extends Controller
{
    //
    public function adnkhome_page()
    {
        $company = new company([

            'C_Name'=>'Nilkanth Investments',

        ]);
        dd($company);
     return view('Ad_back.company_list');
    }

}
