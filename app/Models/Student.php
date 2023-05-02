<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['name','age','dob','address','parent_mobile_no','parent_email_id','student_photo','year_group','record_added_by','created_at','updated_at'];

    public function result()
{
    return $this->hasMany(Result::class);
}
}
