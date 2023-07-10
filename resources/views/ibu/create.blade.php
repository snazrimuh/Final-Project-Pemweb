@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Tambah Data Ibu</h5>
                        <a href="{{ route('ibu.index') }}" class="btn btn-primary btn-sm float-right mt-4">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ibu.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nik_ibu">NIK Ibu</label>
                                <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="{{ old('nik_ibu') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kk">KK</label>
                                <input type="text" class="form-control" id="kk" name="kk" value="{{ old('kk') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat_ibu">Alamat Ibu</label>
                                <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" value="{{ old('alamat_ibu') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir_ibu">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu') }}" required>
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
