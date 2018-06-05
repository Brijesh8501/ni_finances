<?php

namespace App\Http\Controllers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\insertglobal as insertglobe;

class insertglobal extends Controller
{
    //
    public function insertrecordtodatabase($tablename,$passarray)
    {
        $insert_table = new insertglobe;
        $insert_table->setTable($tablename);
        $keys = array_keys($passarray);
        $column_count = count(array_keys($passarray));

        $values = array_values($passarray);
        $array_for_query = array();

        for($startindex = 0; $startindex < $column_count; $startindex++)
        {
            $array_for_query[$keys[$startindex]] = $values[$startindex];
        }
       DB::table($tablename)->insert($array_for_query);



    }


}
