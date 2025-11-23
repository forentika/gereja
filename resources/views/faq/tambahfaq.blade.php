@extends('layout.admin')

@section('content')
    
<div class="container">
    <h1 class="my-4">Tambah Faq</h1>
    <form action="/admin/tambahfaq" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pertanyaan" class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan">
        </div>
        <div class="mb-3">
            <label for="jawaban" class="form-label">Jawaban</label>
            <textarea class="form-control" id="jawaban" name="jawaban"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
