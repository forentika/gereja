@extends('layout.admin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title text-center">Galeri</h3>
                </div>
                <div class="card-body">
                    <form id="galeriForm" action="/admin/tambahgaleri" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar:</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori:</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="pastoral">Pastoral</option>
                                <option value="kegiatan">Kegiatan</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection


