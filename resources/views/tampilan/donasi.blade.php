@extends('layout.user')

@section('container')
 <!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="background-image: url('{{ URL::asset('Template/img/bg1.png')}}');">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Donasi</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
        </ol>    
    </div>
</div>
<br>

<!-- Header End -->

<div class="container">
    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead class="bg-primary text-white text-dark"> <!-- Mengubah warna latar belakang menjadi hitam dan teks menjadi putih -->
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemberi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jenis Donasi</th>
                        <th scope="col">Jumlah Donasi</th>
                    </tr>
                
                <tbody>
                    <?php $nomor = 1; ?>
                    @foreach ($allDonasi as $row)
                    <tr>
                        <td><?= $nomor?></td>
                        <td>{{ $row->namapemberi }}</td>
                        <td>{{ $row->tanggal}}</td>
                        <td>{{ $row->jenis }}</td>
                        <td>Rp.{{ number_format ($row->jumlahdonasi),0 }}</td>
                    </tr>
                    <?php $nomor++; ?>
                    @endforeach
                </tbody>
                <!-- Tambahkan total donasi di dalam tabel -->
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right"><strong>Total Donasi</strong></td>
                        <td><strong>Rp.{{ number_format($JumlahDonasi, 0) }}</strong></td>
                    </tr>
                </tfoot>
                
        </table>
    </div>
</div>

@endsection
