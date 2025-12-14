<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class allskktenagakerjablora extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function namasekolah()
    {
        return $this->belongsTo(namasekolah::class, 'namasekolah_id');
    }

    public function jenjangpendidikan()
    {
        return $this->belongsTo(jenjangpendidikan::class);
    }

    public function tahunpilihan()
    {
        return $this->belongsTo(tahunpilihan::class, 'tahunpilihan_id');
    }

    public function agendaskk()
    {
        return $this->hasMany(agendaskk::class, 'agendaskk_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


        public function asosiasimasjaki()
        {
            return $this->hasMany(asosiasimasjaki::class);
        }

        public function jabatankerja()
        {
            return $this->belongsTo(jabatankerja::class, 'jabatankerja_id');
        }

        public function jabatanskkanda()
        {
            return $this->belongsTo(jabatankerja::class, 'jabatanskkanda_id');
        }

        public function kecamatankbb()
        {
            return $this->belongsTo(kecamatankbb::class, 'kecamatankbb_id');
        }

        public function jenjang()
        {
            return $this->belongsTo(jenjang::class, 'jenjang_id');
        }


}
