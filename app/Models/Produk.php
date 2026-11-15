<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\TableExtension;

class Produk extends Model
{
    //tabel
    protected $table = 'tb_produk';

    //kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stock',
        'gambar'
    ]; 
    
}
