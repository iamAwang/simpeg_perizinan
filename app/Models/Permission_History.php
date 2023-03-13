<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_History extends Model
{
    protected $fillable = ['id_PermissionForm','id_Employee'];
    protected $table = 'permission_histories';

    public function form(){
        return $this->belongsTo(Permission_Form::class,'id_PermissionForm');
    }
}
