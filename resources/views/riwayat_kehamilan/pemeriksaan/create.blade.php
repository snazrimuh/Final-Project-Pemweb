@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Tambah Pemeriksaan Kehamilan</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('riwayat-kehamilan.pemeriksaan.store', $riwayatKehamilan->id_kehamilan) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="lingkar_perut">Lingkar Perut:</label>
                        <input type="number" class="form-control" id="lingkar_perut" name="lingkar_perut" required>
                    </div>
                    <div class="form-group">
                        <label for="tb_ibu">Tinggi Badan Ibu:</label>
                        <input type="number" class="form-control" id="tb_ibu" name="tb_ibu" required>
                    </div>
                    <div class="form-group">
                        <label for="bb_ibu">Berat Badan Ibu:</label>
                        <input type="number" class="form-control" id="bb_ibu" name="bb_ibu" required>
                    </div>
                    <div class="form-group">
                        <label for="sistole">Sistole:</label>
                        <input type="number" class="form-control" id="sistole" name="sistole" required>
                    </div>
                    <div class="form-group">
                        <label for="diastole">Diastole:</label>
                        <input type="number" class="form-control" id="diastole" name="diastole" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
