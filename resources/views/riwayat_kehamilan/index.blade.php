@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Riwayat Kehamilan</h5>
                <br>
                <a href="{{ route('riwayat-kehamilan.create') }}" class="btn btn-sm float-right" style="color:white; background-color:#00C2C0">Tambah Riwayat Kehamilan</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Kehamilan</th>
                            <th>Nama Ibu</th>
                            <th>Tanggal Melahirkan</th>
                            <th>Pemeriksaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayatKehamilan as $riwayat)
                            <tr>
                                <td>{{ $riwayat->id_kehamilan }}</td>
                                <td>{{ optional($riwayat->ibu)->nama_ibu }}</td>
                                <td>{{ $riwayat->tgl_melahirkan }}</td>
                                <td>
                                    <a href="{{ route('riwayat-kehamilan.pemeriksaan.create', $riwayat->id_kehamilan) }}" class="btn btn-sm btn-primary">Tambah</a>
                                    <a href="{{ route('riwayat-kehamilan.pemeriksaan.index', $riwayat->id_kehamilan) }}" class="btn btn-sm btn-secondary">Lihat Riwayat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
