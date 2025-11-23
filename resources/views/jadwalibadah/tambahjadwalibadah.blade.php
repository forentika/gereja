@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="my-4">Tambah Data Jadwal Ibadah</h1>
    <form action="/admin/tambahjadwalibadah" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namaibadah" class="form-label">Nama Ibadah</label>
            <input type="text" class="form-control" id="namaibadah" name="namaibadah">
        </div>
        <div class="mb-3">
            <label for="ayatalkitab" class="form-label">Ayat Alkitab</label>
            <input type="text" class="form-control" id="ayatalkitab" name="ayatalkitab">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>  
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="pengkhotbah" class="form-label">Pengkhotbah</label>
            <input type="text" class="form-control" id="pengkhotbah" name="pengkhotbah">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
