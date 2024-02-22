<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeList extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fname','Mname','Lname','Age','Email','Contnum','Idnum','PositionEmployee','Dept','Password',
     ];
}
