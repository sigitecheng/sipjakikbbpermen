<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class divpaketpekerjaan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function ahspdiv1()
    {
        return $this->hasMany(ahspdiv1::class);
    }

    public function divpekerjaan()
    {
        return $this->hasMany(divpekerjaan::class);
    }

}
