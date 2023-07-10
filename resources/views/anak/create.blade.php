@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tambah Data Anak</h5>
                    <a href="{{ route('anak.index') }}" class="btn btn-primary btn-sm float-right mt-4">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('anak.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nik_anak">NIK</label>
                            <input type="text" class="form-control" id="nik_anak" name="nik_anak">
                        </div>
                        <div class="form-group">
                            <label for="kk">KK</label>
                            <input type="text" class="form-control" id="kk" name="kk">
                        </div>
                        <div class="form-group">
                            <label for="nama_anak">Nama Anak</label>
                            <input type="text" class="form-control" id="nama_anak" name="nama_anak">
                        </div>
                        <div class="form-group">
                            <label for="alamat_anak">Alamat</label>
                            <input type="text" class="form-control" id="alamat_anak" name="alamat_anak">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir_anak">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir_anak" name="tgl_lahir_anak">
                        </div>
                        <div class="form-group">
                            <label for="id_kelurahan">ID Kelurahan</label>
                            <select class="form-control" id="id_kelurahan" name="id_kelurahan">
                                <option value="">Pilih Kelurahan</option>
                                @if(Auth::user()->role === 'admin')
                                    @foreach($kelurahan as $item)
                                        <option value="{{ $item->id_kelurahan }}">{{ $item->id_kelurahan }} - {{ $item->nama_kelurahan }}</option>
                                    @endforeach
                                @else
                                    @foreach($kelurahan as $item)
                                        @if($item->id_kelurahan == Auth::user()->id_kelurahan)
                                            <option value="{{ $item->id_kelurahan }}" selected>{{ $item->id_kelurahan }} - {{ $item->nama_kelurahan }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

