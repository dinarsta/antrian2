<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poly extends Model
{
    use HasFactory;
    protected $table = 'polies';
    protected $guarded = [];

    public function dokters()
    {
        return $this->belongsToMany(Dokter::class, 'nama_poly_dokters', 'id_poly', 'id_dokter')
            ->withPivot(['jam_kerja', 'shift']);
    }
}
