<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nip',    'nama', 'jabatan_id',
        'divisi_id', 'gender', 'tmp_lahir',
        'tgl_lahir', 'alamat', 'foto'
    ];

    public function divisi()
    {
        return $this->belongsTo(DivisiModel::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(JabatanModel::class);
    }
}
