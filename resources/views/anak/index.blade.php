@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Anak</h5>
                    <a href="{{ route('anak.create') }}" class="btn btn-sm float-right mt-4" style="color:white; background-color:#00C2C0">Tambah Data Anak</a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>KK</th>
                                <th>Nama Anak</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>ID Kelurahan</th>
                                <th>Action</th>
                                <th>Pemeriksaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($anak as $item)
                            <tr>
                                <td>{{ $item->nik_anak }}</td>
                                <td>{{ $item->kk }}</td>
                                <td>{{ $item->nama_anak }}</td>
                                <td>{{ $item->alamat_anak }}</td>
                                <td>{{ $item->tgl_lahir_anak }}</td>
                                <td>{{ $item->id_kelurahan }}</td>
                                <td>
                                    <a href="{{ route('anak.edit', $item->nik_anak) }}" class="btn btn-sm" style="background-color:white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('anak.destroy', $item->nik_anak) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm" style="background-color:white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('anak.pemeriksaan.index', $item->nik_anak) }}" class="btn btn-sm btn-secondary">Riwayat</a>
                                    <a href="{{ route('anak.pemeriksaan.create', $item->nik_anak) }}" class="btn btn-sm btn-primary">Tambah</a>
                                </td>
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
