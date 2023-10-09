<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursedetails extends Model
{
    use HasFactory;
    protected $table = 'coursedetails';
    protected $primaryKey = 'id';
    protected $fillable = ['course_id', 'course_type', 'session_id','title','descep','incharge_email','start_time','end_time','instuctor_email','duration','credit_hour','cpe_hour','contact_hour'];
}
