<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_Form extends Model
{
    protected $fillable = ['full name','employee number','started date','ended date','permission type','reason','statuse','rejection reason'];
    protected $table = 'permission_forms';
}
