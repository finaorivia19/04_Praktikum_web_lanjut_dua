<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public static function getByName($name){
        return User::where([
            'name' => $name,
        ])->first();
    }
}
