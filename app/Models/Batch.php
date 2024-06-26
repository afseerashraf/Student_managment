<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $table = 'batches';
    protected $fillable = ['name', 'course_id', 'date'];
    protected $primarykey = 'id';

    public function course(){
        return $this->belongsTo(Cource::class);
    }
}
