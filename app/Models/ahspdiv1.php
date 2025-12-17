<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ahspdiv1 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function divpaketpekerjaan()
    {
        return $this->belongsTo(divpaketpekerjaan::class, 'divpaketpekerjaan_id');
    }

    public function divpekerjaan()
    {
        return $this->belongsTo(divpekerjaan::class, 'divpekerjaan_id');
    }

    public function divuraianpekerjaan()
    {
        return $this->belongsTo(divuraianpekerjaan::class, 'divuraianpekerjaan_id');
    }

    public function divuraianupahpekerjaan()
    {
        return $this->hasMany(divuraianupahpekerjaan::class);
    }

    public function divuraianbahanmaterial()
    {
        return $this->hasMany(divuraianbahanmaterial::class);
    }

    public function divuraianbahanperalatan()
    {
        return $this->hasMany(divuraianbahanperalatan::class);
    }

}
