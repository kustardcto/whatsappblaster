<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freetrial extends Model
{
    protected $table='free_trial';
    protected $fillable=['name','email','mobile'];
}
