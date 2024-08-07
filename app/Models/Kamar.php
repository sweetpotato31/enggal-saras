<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'm_kamar';

    protected $guarded = ['id'];

    public function Bed(){
        return $this->hasMany(Bed::class);
    }
}
