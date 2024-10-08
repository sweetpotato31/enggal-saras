<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasiPasien extends Model
{
    use HasFactory;
    protected $table = 'm_reservasi_pasien';
    protected $guarded = ['id'];

    public function Layanan(){
        return $this->belongsTo(Layanan::class);
    }
}
