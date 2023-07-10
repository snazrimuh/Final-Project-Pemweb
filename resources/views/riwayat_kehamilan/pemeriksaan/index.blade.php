@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Riwayat Pemeriksaan Kehamilan</h5>
                <a href="{{ route('riwayat-kehamilan.pemeriksaan.create', $riwayatKehamilan) }}" class="btn btn-sm btn-primary mt-3 float-right">Tambah Pemeriksaan</a>
                <a href="{{ route('riwayat-kehamilan.index') }}" class="btn btn-sm btn-secondary mt-3">Kembali</a>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Pemeriksaan</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Lingkar Perut</th>
                            <th>Tinggi Badan Ibu</th>
                            <th>Berat Badan Ibu</th>
                            <th>Tekanan Sistole</th>
                            <th>Tekanan Diastole</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemeriksaanKehamilan as $pemeriksaan)
                            <tr>
                                <td>{{ $pemeriksaan->id }}</td>
                                <td>{{ $pemeriksaan->created_at }}</td>
                                <td>{{ $pemeriksaan->lingkar_perut }}</td>
                                <td>{{ $pemeriksaan->tb_ibu }}</td>
                                <td>{{ $pemeriksaan->bb_ibu }}</td>
                                <td>{{ $pemeriksaan->sistole }}</td>
                                <td>{{ $pemeriksaan->diastole }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                
            </div>
        </div>
    </div>
@endsection
