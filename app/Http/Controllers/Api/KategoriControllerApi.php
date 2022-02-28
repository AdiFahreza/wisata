<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KategoriResource;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriControllerApi extends Controller
{
    public function kategori()
    {
        $kategori = Kategori::all();
        return KategoriResource::collection($kategori);
    }
}
