@extends('layout.admin')
@section('content')
    
<div class="container">
    <a href="{{ url('admin/tambahdatajemaat') }}" class="btn btn-success mb-3">Tambah Data Jemaat</a>
    <h1>Daftar Jemaat</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Tanggal lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Sektor</th>
                <th>Status</th>
                <th>Aksi</th> <!-- Kolom untuk tombol edit dan hapus -->
            </tr>
        </thead>
        <tbody>
            @foreach ($allDatajemaat as $datajemaat)
            <tr>
                <td>{{ $datajemaat->nama }}</td>
                <td>{{ $datajemaat->tanggallahir }}</td>
                <td>{{ $datajemaat->jeniskelamin }}</td>
                <td>{{ $datajemaat->alamat }}</td>
                <td>{{ $datajemaat->sektor }}</td>
                <td>{{ $datajemaat->statusbabtis }}</td>
                <td> <!-- Kolom untuk tombol edit dan hapus -->
                    <a href="{{ url('/admin/editdatajemaat/'.$datajemaat->id)}}" class="btn btn-primary ml-3 mb-2">Edit</a>
                    <form action="{{ url('/admin/hapusdatajemaat/'.$datajemaat->id)}}" method="post" onsubmit="return confirm('Yakin mau hapus???');"> 
                        @csrf
                        @method('DELETE') <!-- Method DELETE untuk hapus -->
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
