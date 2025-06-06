<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function Jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }

    public function getFormattedUploadDateAttribute()
    {
        return \Carbon\Carbon::parse($this->upload_date)->format('d/m/Y');
    }
}
