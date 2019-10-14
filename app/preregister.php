<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preregister extends Model
{
    protected $fillable = ['host_name','visitor_name','address','phone','email','nic','clockin','clockout'];

}
