@extends('layout.admin')

@section('content')
    
<div class="container">
    <h1 class="my-4">Tambah Data jemaat</h1>
    <form action="/admin/tambahdatajemaat" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal lahir</label>
            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
        </div>      
        <select class="form-control" id="jeniskelamin" name="jeniskelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="sektor" class="form-label">Sektor</label>
            <input type="text" class="form-control" id="sektor" name="sektor">
        </div>
        <select class="form-control" id="statusbabtis" name="statusbabtis">
            <option value="Sudah babtis">Sudah Babtis</option>
            <option value="Belum babtis">Belum Babtis</option>
        </select>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>      
@endsection
