<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = ['enrollment_id', 'paid_date', 'fee'];
    protected $primarykey = 'id';

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }
}
