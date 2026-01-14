<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialMasuk extends Model
{
    protected $fillable = [
        'id',
        'tanggal_masuk',
        'supplier_id',
        'material_id',
        'jumlah_masuk',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function material()      
    {
        return $this->belongsTo(Material::class);
    }

    protected static function booted()
    {
        static::created(function ($materialMasuk) {
            $material = $materialMasuk->material;
            $material->stok += $materialMasuk->jumlah_masuk;
            $material->save();
        });

        static::deleted(function ($materialMasuk) {
            $material = $materialMasuk->material;
            $material->stok -= $materialMasuk->jumlah_masuk;
            $material->save();
        });
    }

}
