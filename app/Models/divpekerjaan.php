<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class divpekerjaan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function ahspdiv1()
    {
        return $this->hasMany(ahspdiv1::class);
    }


    public function divpaketpekerjaan()
    {
        return $this->belongsTo(divpaketpekerjaan::class, 'divpaketpekerjaan_id');
    }

    public function divuraianpekerjaan()
    {
        return $this->hasMany(divuraianpekerjaan::class);
    }

}
