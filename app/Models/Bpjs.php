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
      return $this->belongsTo(Polies::class, 'selected_poly_id'); // Update the foreign key column name
  }

  // Relasi dengan Dokter
  public function dokter()
  {
      return $this->belongsTo(Dokter::class, 'selected_dokter_id'); // Update the foreign key column name
  }
}