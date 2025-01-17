<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang', 
        'stok_awal', 
        'stok_akhir',  
        'barang_masuk', 
        'barang_keluar',
        'satuan', 
        'keterangan', 
        'tanggal'
    ];
}
