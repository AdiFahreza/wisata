@extends('layouts.app')

@section('content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="tile col-12 mb-4">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-12">
                <h2 class="mb-3 line-head" id="buttons">Tambah Wisata</h2>
                </div>
              </div>
            </div>
            <div class="row">
                <form action="{{ route('wisata.store') }}" method="POST" class="col-12" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Destinasi</label>
                        <input class="form-control"  type="text"  placeholder="Masukkan Nama wisata , ex : Sungai Kembang" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input class="form-control"  type="text"  placeholder="Masukkan Deskripsi Wisata" name="konten">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input class="form-control"  type="file"  placeholder="" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kategori</label>
                        <select name="kategori_id" id="" class="form-control">
                            <option selected value="0">-- Pilih Kategori --</option>
                            @foreach ($kategori as $kt)
                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Wilayah</label>
                        <select name="wilayah_id" id="" class="form-control">
                            <option selected value="0">-- Pilih Wilayah --</option>
                            @foreach ($wilayah as $wl)
                                <option value="{{ $wl->id }}">{{ $wl->nama_wilayah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="tile-footer text-center">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="{{ route('wisata.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
          </div>
    </div>
  </main>
@endsection
