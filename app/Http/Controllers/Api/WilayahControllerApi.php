<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WilayahResource;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahControllerApi extends Controller
{
    public function wilayah()
    {
        $wilayah = Wilayah::all();
        return WilayahResource::collection($wilayah);
    }
}
