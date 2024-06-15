<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource extends Model
{
    use HasFactory;
    protected $table = "cources";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'syllabus', 'duration'];

    public function duration(){
        return $this->duration."months";
    }
}
