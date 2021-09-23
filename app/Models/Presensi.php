<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $table = 'presensi';
    protected $primarykey = 'id';
    protected $fillable = ([
        'id', 'user_id', 'tgl', 'jam_masuk', 'jam_keluar', 'jam_kerja',
    ]);

    public function user() {
        return $this->belongsTo(User::class);
    }
}
