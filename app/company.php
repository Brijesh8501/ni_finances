<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $table = 'company';
    //protected $primaryKey = 'Company_Id';
    protected $guarded = ['Modified_By'];
    public $timestamps = false;
}
