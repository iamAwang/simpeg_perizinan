<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_Form extends Model
{
    protected $fillable = ['full_name','employee_number','started_date','ended_date','id_PermissionType','reason','status','id_RejectedBy','rejection_reason'];
    protected $table = 'permission__forms';

    public function types(){
        return $this->belongsTo(Permission_Types::class,'id_PermissionType');
    }
    public function rejecteds(){
        return $this->belongsTo(Rejected_Bys::class,'id_RejectedBy');
    }
}
