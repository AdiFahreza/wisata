<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = 'wilayah';
    protected $fillable = ['nama_wilayah'];

    public function destinasi()
    {
        return $this->hasMany(Destinasi::class, 'wilayah_id', 'id');
    }
}
