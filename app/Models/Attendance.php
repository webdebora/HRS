<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Attendance extends Model
{
    protected $fillable = ['id_number', 'date', 'status'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_number', 'id_number');
    }
}

