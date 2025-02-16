<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory, SoftDeletes;

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function detailtugas()
    {
        return $this->hasMany(DetailTugas::class);
    }
}
