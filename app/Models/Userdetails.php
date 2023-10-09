<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    protected $table = 'userdetails';
    protected $primarykey = 'id';
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'active',
        'email',
        'country'
    ];
    use HasFactory;
}
