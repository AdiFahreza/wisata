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
                <h2 class="mb-3 line-head" id="buttons">List Kategori
                    <a class="btn btn-md btn-success pull-right" href="{{ route('kategori.create') }}">Tambah Data</a>
                </h2>
                </div>
              </div>
            </div>
            <div class="row">
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>No.</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($kategori as $kt)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kt->nama }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy', $kt->id) }}" method="POST">
                                <a class="btn btn-md btn-warning" href="{{ route('kategori.edit', $kt->id) }}">EDIT</a>
                                {{-- <a class="btn btn-md btn-danger" href="{{ route('kategori.destroy', $kt->id) }}">HAPUS</a> --}}
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-md btn-danger">HAPUS</button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center text-danger">Maaf Tidak Ada Data Yang Ditampilkan</td>
                    </tr>
                    @endforelse
                </table>
            </div>
          </div>
    </div>
  </main>
@endsection
