<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fname','Mname','Lname','Age','Email','Contnum','Idnum','Position','Dept','Password',
     ];
}
