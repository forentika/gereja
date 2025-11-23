@extends('layout.admin')

@section('content')
<div class="container">
    <a href="{{url('admin/datajemaat')}}" class="btn btn-success mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/admin/updatedatajemaat/'.$datajemaat->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" value="{{ $datajemaat->nama }}">
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggallahir">Tanggal lahir</label>
                    <input name="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" id="tanggallahir" value="{{ $datajemaat->tanggallahir }}">
                    @error('tanggallahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select name="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" id="jeniskelamin">
                        <option value="Laki-laki" {{ $datajemaat->jeniskelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $datajemaat->jeniskelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('jeniskelamin')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{ $datajemaat->alamat }}">
                    @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group">
                    <label for="sektor">Sektor</label>
                    <input name="sektor" type="text" class="form-control @error('sektor') is-invalid @enderror" id="sektor" placeholder="Sektor" value="{{ $datajemaat->sektor }}">
                    @error('sektor')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group"> 
                    <label for="statusbabtis">Status Babtis</label>
                    <select class="form-control" id="statusbabtis" name="statusbabtis">
                        <option value="Sudah babtis" {{ $datajemaat->statusbabtis == 'Sudah babtis' ? 'selected' : '' }}>Sudah Babtis</option>
                        <option value="Belum babtis" {{ $datajemaat->statusbabtis == 'Belum babtis' ? 'selected' : '' }}>Belum Babtis</option>
                    </select>
                    @error('statusbabtis')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Update Data Jemaat</button>
            </form>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@endsection


