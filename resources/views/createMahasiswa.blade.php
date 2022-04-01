@extends('template.adminLTE')

@section('title', 'Tambah Data Mahasiswa')
    
@section('title-body', 'Tambah Data Mahasiswa')

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
  </ol>
@endsection

@section('content')
  <h1>Tambah Data Mahasiswa</h1>
    <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Jurusan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Simpan</button>
          </div>
    </form>
@endsection