@extends('layout.admin')

@section('content')
<div class="container">
    <a href="{{url('admin/faq')}}" class="btn btn-success mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/admin/updatefaq/'.$faq->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Pertanyaan</label>
                    <input name="pertanyaan" type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Pertanyaan" value="{{ $faq->pertanyaan }}">
                    @error('pertanyaan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Jawaban</label>
                    <textarea name="jawaban" class="form-control @error('jawaban') is-invalid @enderror" id="jawaban" rows="3">{{ $faq->jawaban }}</textarea>
                    @error('jawaban')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Update FAQ</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="btn-group-vertical">
                <a href="{{url('admin/editfaq/'.$faq->id)}}" class="btn btn-info mb-2">Edit</a>
                <a href="{{url('admin/deletefaq/'.$faq->id)}}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
@endsection
