<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, Cachable;

    public $fillable = [
        'name',
        'desc',
        'city_id'
    ];

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id', 'id')->withDefault();
    }
}
