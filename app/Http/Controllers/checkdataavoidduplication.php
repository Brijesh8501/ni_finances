<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class checkdataavoidduplication extends Controller
{
    //
    public function checkdataform($tablename,$whereid,$whereidvalue)
    {
        // select query to check data exists or not in database //
        $result_query = DB::table($tablename)
                        ->select('Logo')
                        ->where($whereid,'=',$whereidvalue)
                        ->get();

        return $result_query;



    }
}
