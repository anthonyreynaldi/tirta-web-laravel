<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'table_b';

    protected $fillable = [
        'kode_toko',
        'nominal_transaksi'
    ];

    public $timestamps = false;

    public $primaryKey = "kode_toko";
}
