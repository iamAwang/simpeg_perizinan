<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_Form extends Model
{
    protected $fillable = ['full_name','employee_number','started_date','ended_date','id_PermissionType','reason','status','id_RejectedBy'];
    protected $table = 'permission_forms';
}
