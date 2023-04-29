<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
//    protected $table='users';
    use HasFactory;
    protected $fillable=['UserName','Password','FirstName','LastName'];
}
