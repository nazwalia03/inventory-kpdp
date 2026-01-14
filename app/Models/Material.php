<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'id',
        'nama_material',
        'gambar',
        'id_kategori',
        'id_satuan',
        'stok',
        'harga',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'id_satuan');
    }

    public function materialMasuk()
    {
        return $this->hasMany(MaterialMasuk::class, 'material_id');
    }

    public function materialKeluar()
    {
        return $this->hasMany(MaterialKeluar::class, 'material_id');
    }

}
