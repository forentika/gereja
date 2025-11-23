@extends('layout.admin')

@section('content')
<div class="container">
    <a href="{{url('admin/donasi')}}" class="btn btn-success mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/admin/updatedonasi/'.$donasi->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="namapemberi"> Nama Pemberi</label>
                    <input name="namapemberi" type="text" class="form-control @error('namapemberi') is-invalid @enderror" id="namapemberi" placeholder="Nama" value="{{ $donasi->namapemberi }}">
                    @error('namapemberi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" value="{{ $donasi->tanggal }}">
                    @error('tanggal')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Donasi</label>
                    <select name="jenis" class="form-control @error('jenis') is-invalid @enderror" id="jenis">
                        <option value="Pembangunan" {{ $donasi->jenis == 'pembangunan' ? 'selected' : '' }}>Pembangunan</option>
                        <option value="Dana Pensiun" {{ $donasi->jenis== 'danapensiun' ? 'selected' : '' }}>Dana Pensiun</option>
                        <option value="Peduli Masyarakat" {{ $donasi->jenis== 'pedulimasyarakat' ? 'selected' : '' }}>Peduli Masyarakat</option>
                        <option value="Lansia" {{ $donasi->jenis== 'lansia' ? 'selected' : '' }}>Lansia</option>
                        <option value="Sekolah Minggu" {{ $donasi->jenis== 'sekolahminggu' ? 'selected' : '' }}>Sekolah Minggu</option>
                        <option value="Remaja/Naposo" {{ $donasi->jenis== 'remajanaposo' ? 'selected' : '' }}>Remaja/Naposo</option>
                        <option value="Lainnya" {{ $donasi->jenis== 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('jeniskelamin')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="jumlahdonasi">Jumlah Donasi</label>
                    <input name="jumlahdonasi" type="number" class="form-control @error('jumlahdonasi') is-invalid @enderror" id="jumlahdonasi" placeholder="Jumlah Donasi" value="{{ $donasi->jumlahdonasi }}">
                    @error('namapemberi')
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
