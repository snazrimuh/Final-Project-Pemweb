@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-5 align-self-center">
    <div class="card text-white" style="background-color:#26C6DA">
        <div class="card-body">
          <h5>Welcome Administrator  {{ auth()->user()->name }} !</h5>
        </div>
      </div>
      <h3 class="display-5 mt-4"><b>Sistem Monitoring Dan Pencegahan Stunting Anak</b></h3>
    </div>
    <div class="col-md-7">
      <img src="{{ asset('images/home.jpg') }}" alt="Gambar" class="img-fluid">
    </div>
  </div>
@endsection
