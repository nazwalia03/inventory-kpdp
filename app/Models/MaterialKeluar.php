<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialKeluar extends Model
{
    protected $fillable = [
        'id',
        'tanggal_keluar',
        'material_id',
        'jumlah_keluar',
        'tujuan'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }

    protected static function booted()
    {
        static::creating(function ($materialKeluar) {
            $material = Material::find($materialKeluar->material_id);
            if ($material && $material->stok < $materialKeluar->jumlah_keluar) {
                throw new \Exception('Stok material tidak mencukupi untuk keluar.');
            }
        });

        static::created(function ($materialKeluar) {
            $material = $materialKeluar->material;
            $material->stok -= $materialKeluar->jumlah_keluar;
            $material->save();
        });

        static::deleted(function ($materialKeluar) {
            $material = $materialKeluar->material;
            $material->stok += $materialKeluar->jumlah_keluar;
            $material->save();
        });
    }
}
