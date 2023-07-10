@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Admin Wilayah</h2>
        <form action="{{ route('admin_wilayah.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $admin->name) }}" required>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}" required>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <!-- <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div> -->
            <div class="form-group">
                <label for="id_kelurahan">Kelurahan</label>
                <select class="form-control @error('id_kelurahan') is-invalid @enderror" id="id_kelurahan" name="id_kelurahan" required>
                    <option value="">Pilih Kelurahan</option>
                    @foreach ($kelurahan as $k)
                        <option value="{{ $k->id_kelurahan }}" {{ old('id_kelurahan', $admin->id_kelurahan) == $k->id_kelurahan ? 'selected' : '' }}>{{ $k->nama_kelurahan }}</option>
                    @endforeach
                </select>
                @error('id_kelurahan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
