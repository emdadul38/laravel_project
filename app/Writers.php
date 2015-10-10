<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writers extends Model
{
    protected $fillable = ['first_name','last_name','program','email','password','gender','birthday'];
}
