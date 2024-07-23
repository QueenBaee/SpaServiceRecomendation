<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wajah extends Model
{
    use HasFactory;
        protected $table = 'tb_perawatanwajah';
        public $timestamps = false;
        protected $primaryKey = 'id';
        protected $fillable = ['nama', 'alamat', 'tanggal_konsultasi','perawatan_rutin','perawatan_sebelumnya','saran_perawatan'];
}
