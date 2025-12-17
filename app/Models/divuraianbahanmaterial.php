<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class divuraianbahanmaterial extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function ahspdiv1()
    {
        return $this->belongsTo(ahspdiv1::class, 'ahspdiv1_id');
    }

    public function satuanhargamaterial()
    {
        return $this->belongsTo(satuanhargamaterial::class, 'satuanhargamaterial_id');
    }

}
