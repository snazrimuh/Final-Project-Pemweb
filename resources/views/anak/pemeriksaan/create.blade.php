@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tambah Pemeriksaan  {{ $anak->nama_anak }}</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('anak.pemeriksaan.store', $anak->nik_anak) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="number" name="usia" id="usia" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tb_anak">Tinggi Badan Anak</label>
                            <input type="number" name="tb_anak" id="tb_anak" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="bb_anak">Berat Badan Anak</label>
                            <input type="number" name="bb_anak" id="bb_anak" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="imt">Indeks Massa Tubuh (IMT)</label>
                            <input type="number" name="imt" id="imt" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="vitamin">Vitamin</label>
                            <input type="text" name="vitamin" id="vitamin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="status_tb">Status Tinggi Badan</label>
                            <input type="text" name="status_tb" id="status_tb" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="status_bb">Status Berat Badan</label>
                            <input type="text" name="status_bb" id="status_bb" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id_parameter">ID Parameter</label>
                            <input type="number" name="id_parameter" id="id_parameter" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="status_stunting">Status Stunting</label>
                            <input type="text" name="status_stunting" id="status_stunting" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
