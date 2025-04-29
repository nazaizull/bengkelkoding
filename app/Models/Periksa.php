<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa'
    ];

    public function dokter(): BelongsTo{
        return $this->belongsTo(User::class,'id_dokter');
    }

    public function pasien(): BelongsTo{
        return $this->belongsTo(User::class,'id_pasien');
    }
    public function detailPeriksa(): HasMany{
        return $this->hasMany(DetailPeriksa::class,'id_periksa');
    }
}
