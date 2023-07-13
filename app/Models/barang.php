<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table ='barang';
    protected $guarded = ['id'];
    public function fjenis()
    {
        return $this->belongsTo(jenis::class,'jenis', 'id');
    }
    
}
