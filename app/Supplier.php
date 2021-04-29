<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable =[
        'fname','lname','addLine1','addLine2','phone','email'
    ];
}
