@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Riwayat Pemeriksaan {{ $anak->nama_anak }}</h5>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <a href="{{ route('anak.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID Pemeriksaan</th>
                                <th>Usia</th>
                                <th>Tinggi Badan</th>
                                <th>Berat Badan</th>
                                <th>IMT</th>
                                <th>Vitamin</th>
                                <th>Status TB</th>
                                <th>Status BB</th>
                                <th>ID Parameter</th>
                                <th>Status Stunting</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pemeriksaan as $item)
                            <tr>
                                <td>{{ $item->id_pemeriksaan_anak }}</td>
                                <td>{{ $item->usia }}</td>
                                <td>{{ $item->tb_anak }}</td>
                                <td>{{ $item->bb_anak }}</td>
                                <td>{{ $item->imt }}</td>
                                <td>{{ $item->vitamin }}</td>
                                <td>{{ $item->status_tb }}</td>
                                <td>{{ $item->status_bb }}</td>
                                <td>{{ $item->id_parameter }}</td>
                                <td>{{ $item->status_stunting }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
