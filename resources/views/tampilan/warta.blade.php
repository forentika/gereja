<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warta Jemaat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>
<body>

@extends('layout.user')

@section('container')
<style>
    .text-warta{
        margin-left: 13px;
        font-weight: 700;
        color: #F7941E;
    }
    .text-warta:hover{
        margin-left: 13px;
        font-weight: 700;
        color: #FFA343;
    }
</style>
    <!-- Header Start -->
    <header class="bg-breadcrumb" style="background-image: url('{{ URL::asset('Template/img/bg1.png')}}');">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Warta Jemaat</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
            </ol>
        </div>
    </header>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="packages py-5">
        <div class="container py-5" style="padding-left: 7rem !important;padding-right: 7rem !important;">
            <div class="mx-auto text-center mb-5">
                <h5 class="section-title px-3">-</h5>
                <h1 class="mb-0">Warta Jemaat</h1>
            </div>
            <div class="row">
                @foreach ($dataWarta as $item)
                    <div class="col-lg-3 mt-4">
                        <div class="card" style="background: #F1F2F2;border-radius: 5px;">
                            <div class="card-body">
                                <a href="{{ URL::asset('Admin/photo/'.$item->photo) }}" data-lightbox="Image">
                                    <img src="{{ URL::asset('Admin/photo/'.$item->photo) }}" style="border-radius: 5px !important;" class="img-fluid w-100 rounded-top" alt="Image">
                                </a>
                            </div>
                            <div class="card-title">
                                @php
                                    $formattedDate = \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y');
                                @endphp
                                <a href="{{ asset('assets/file-warta/'.$item->pdf ?? '') }}" download="{{ asset('assets/file-warta/'.$item->pdf ?? '') }}">
                                    <span class="text-warta">{{ $item->judul.' Edisi '.$formattedDate }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

</body>
</html>
