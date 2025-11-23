@extends('layout.user')

@section('container')
 <!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="background-image: url('{{ URL::asset('Template/img/bg1.png')}}');">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Data Jemaat</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<div class="container">
    <form action="{{ route('datajemaat.search') }}" method="GET">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Jemaat" name="search" value="{{ request()->query('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead class="bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Status Baptis</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                @foreach ($data as $row)
                <tr>
                    <td><?= $nomor?></td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jeniskelamin }}</td>
                    <td>{{ $row->tanggallahir }}</td>
                    <td>{{ $row->statusbabtis }}</td>
                    <td>{{ $row->alamat }}</td>
                </tr>
                <?php $nomor++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection