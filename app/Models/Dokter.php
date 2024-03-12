<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $guarded = [];
    public function polies()
    {
        return $this->belongsToMany(Polies::class, 'nama_poly_dokters', 'id_dokter', 'id_poly')
            ->withPivot(['jam_kerja', 'shift']);
    }
}
