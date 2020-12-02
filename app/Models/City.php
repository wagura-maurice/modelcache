<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory, Cachable;

    public $fillable = [
        'name',
        'desc'
    ];

    /* public function companies()
    {
        return $this->hasMany(Company::class);
    } */

    public function companies()
    {
        return $this->hasMany(City::class);
    }
}
