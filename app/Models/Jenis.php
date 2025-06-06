<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $guarded = ['id'];

    public function Dokumen()
    {
        return $this->hasMany(Dokumen::class, 'id_jenis', 'id');
    }
}
