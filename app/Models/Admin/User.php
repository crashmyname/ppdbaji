<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = ['adm'];
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
