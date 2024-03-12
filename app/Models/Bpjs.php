<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;
   
    protected $table = 'bpjs';
    protected $guarded = [];

    // Relasi dengan Polies (Poliklinik)
    public function poliklinik()
    {
        return $this->belongsTo(Polies::class, 'id_poly');
    }

    // Relasi dengan Dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
