<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table ='admins';
    protected $fillable = [
        'nama',
        'username',
        'password',
        'telp',
        'level'
    ];
    protected $hidden = ['password', 'remember_token'];
}
