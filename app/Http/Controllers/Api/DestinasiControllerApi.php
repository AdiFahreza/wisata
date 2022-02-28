<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DestinasiResource;
use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DestinasiControllerApi extends Controller
{
    public function destinasi()
    {
        $destinasi = Destinasi::all();
        return DestinasiResource::collection($destinasi);
    }

    public function destinasiDetail(Destinasi $destinasi)
    {
        $detail = Destinasi::where('id', $destinasi->id)->first();
        return new DestinasiResource($detail);
    }

    public function destinasiKategori(Kategori $kategori)
    {
        $destinasi = Destinasi::where('kategori_id', $kategori->id)->get();
        return DestinasiResource::collection($destinasi);
    }
}
