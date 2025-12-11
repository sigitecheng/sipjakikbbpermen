<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class informasirantaipasok extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function kecamatankbb()
    {
        return $this->belongsTo(kecamatankbb::class, 'kecamatankbb_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'usser_id');
    }

    public function rantaipasokmaterial()
    {
        return $this->hasMany(rantaipasokmaterial::class);
    }

    public function rantaipasokperalatan()
    {
        return $this->hasMany(rantaipasokperalatan::class);
    }

    public function rantaipasoktokobangunan()
    {
        return $this->hasMany(rantaipasoktokobangunan::class);
    }

}
