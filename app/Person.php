<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{


    protected $fillable=[


        "First_name",
        "Last_name",
        "phone",
        "email",
        "city"


    ];
}
