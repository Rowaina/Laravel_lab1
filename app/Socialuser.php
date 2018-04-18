<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialuser extends Model
{
   protected $fillable=['name','token','email'];

}
