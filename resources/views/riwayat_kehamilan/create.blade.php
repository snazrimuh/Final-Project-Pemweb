@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Tambah Riwayat Kehamilan</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('riwayat-kehamilan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nik_ibu">NIK Ibu</label>
                        <select name="nik_ibu" id="nik_ibu" class="form-control">
                        <option value="">NIK-Nama Ibu</option>
                            @foreach($ibu as $item)
                                <option value="{{ $item->nik_ibu }}">{{ $item->nik_ibu }} - {{ $item->nama_ibu }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_melahirkan">Tanggal Melahirkan</label>
                        <input type="date" name="tgl_melahirkan" id="tgl_melahirkan" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <a href="{{ route('riwayat-kehamilan.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
