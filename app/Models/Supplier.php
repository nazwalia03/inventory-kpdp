<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
        'nama_supplier',
        'kontak_supplier',
        'alamat_supplier',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
