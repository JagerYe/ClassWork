<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = "departments";
    protected $fillable = ["departmentId", "departmentName"];
    protected $primaryKey = 'departmentId';

    function employees()
    {
        return $this->hasMany(Employee::class, 'departmentId');
    }
}
