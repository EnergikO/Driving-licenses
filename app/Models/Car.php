<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Car extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongTo(Person::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'brand',
        'model',
        'vehicle_type',
        'weight',
        'max_weight',
        'type_of_drive',
        'engine_layout',
        'fuel_type',
        'power',
        'fuel_consumption',
        'state_license_plate',
        'owner_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //
    ];
}
