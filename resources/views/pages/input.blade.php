@extends('layout.master')
@section('section')
@section('title', 'Input Data Perjalanan')

@section('title-card')
    Input Data Perjalanan
@endsection

<form method="POST" action="simpanPerjalanan">
    {{ csrf_field() }}
    
    <div class="mb-3">
        <label for="exampleJenisKelamin" class="form-label">Lokasi</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi" required>
    </div>
    <div class="mb-3">
        <label for="exampleJenisKelamin" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>
    <div class="mb-3">
        <label for="exampleNama" class="form-label">Jam</label>
        <input type="time" class="form-control" id="exampleInputNama" name="jam" required>
    </div>
    <div class="mb-3">
        <label for="exampleJenisKelamin" class="form-label">Suhu</label>
        <input type="text" class="form-control" id="suhu" name="suhu" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection