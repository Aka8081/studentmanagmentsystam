<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'results';
    protected $fillable = ['student_id','maths','science','english','gujarati','computer','exam_year','year_group','obtained_marks','total_marks','percentage','percentile','record_added_by','created_at','updated_at'];

    public function student()
{
    return $this->belongsTo(Student::class, 'student_id','id');
}
}
