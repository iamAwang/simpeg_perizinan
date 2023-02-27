<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission_Form;

class Employee extends Model
{
    protected $table = 'employees';

    public function permissions(){
        return $this->hasMany(Permission_Form::class,'employee_number','employee_number');
    }
}
