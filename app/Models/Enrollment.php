<?php

namespace App\Models;

use App\Models\Batch;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $primarykey = 'id';
    protected $fillable = ['enroll_no', 'batch_id', 'student_id', 'join_date', 'fees'];

    
    public function batch(){
        return $this->belongsTo(Batch::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
