@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Admin Wilayah</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_kelurahan">ID Kelurahan</label>
                            <select class="form-control" id="id_kelurahan" name="id_kelurahan">
                                <option value="">Pilih Kelurahan</option>
                                @foreach($kelurahan as $item)
                                    <option value="{{ $item->id_kelurahan }}">{{ $item->nama_kelurahan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                        </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
