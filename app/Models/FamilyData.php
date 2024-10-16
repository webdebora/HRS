<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyData extends Model
{
    use HasFactory;


    protected $table = 'family_datas';


    protected $fillable = [
        'id_number',
        'mate_name',
        'child_name',
        'wedding_date',
        'marriage_certificate_number',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_number', 'id_number');
    }
}
