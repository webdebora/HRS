<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_number',
        'full_name',
        'nickname',
        'contract_date',
        'work_date',
        'status',
        'position',
        'nuptk',
        'gender',
        'place_birth',
        'birth_date',
        'religion',
        'email',
        'hobby',
        'marital_status',
        'residence_address',
        'phone',
        'address_emergency',
        'phone_emergency',
        'blood_type',
        'last_education',
        'agency',
        'graduation_year',
        'competency_training_place',
        'organizational_experience'
    ];

    protected $primaryKey = 'id_number';
    public $incrementing = false;
    protected $keyType = 'bigInteger';
    function violations()
    {
        return $this->hasMany(violations::class);
    }
    function Family_data()
    {
        return $this->hasOne(Family_data::class);
    }

    protected $dates = ['archived'];

    // Scope to filter non-archived employees
    public function scopeNotArchived($query)
    {
        return $query->whereNull('archived');
    }

    // Scope to filter archived employees
    public function scopeArchived($query)
    {
        return $query->whereNotNull('archived');
    }
}

