@extends('layout.admin')

@section('content')
    
<div class="container">
    <h1 class="my-4">Tambah Warta</h1>
    <form action="/admin/tambahwarta" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul">Judul:</label><br>
            <input type="text" class="form-control" id="judul" name="judul"><br>
        </div>
        <div class="mb-3">
            <label for="keterangan">Keterangan:</label><br>
            <textarea id="keterangan" class="form-control" name="keterangan" rows="4" cols="50"></textarea><br>
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal:</label><br>
            <input type="date" class="form-control" id="tanggal" name="tanggal"><br>
        </div>
        <div class="mb-3">
            <label for="photo">Photo:</label><br>
            <input type="file" class="form-control" id="photo" name="photo"><br><br>
        </div>
        <div class="mb-3">
            <label for="photo">File PDF:</label><br>
            <input type="file" class="form-control" id="pdf" name="pdf"><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
