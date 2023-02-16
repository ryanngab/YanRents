@extends('layouts.main')

@section('content')

<body>


    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        @if ($barang->image)
                            <img src="{{ asset('/storage/' . $barang->category->image) }}" class="card-img-top"
                                alt=" {{ $barang->name }}" style="max-height: 700px; width: 100%; overflow: hidden">
                            {{-- <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$br->category->name }}"> --> --}}
                        @else
                            <br>
                            <img src="https://source.unsplash.com/1200x400/?{{ $barang->category->name }}" class="card-img-top"
                                style="max-height: 700px; width: 100%;" alt="{{ $barang->name }}">

                            {{-- <!-- <img src="https://source.unsplash.com/1200x400/?{{ $br ->category->name }}" class="card-img-top" alt="{{$br->category->name }}"> --> --}}
                        @endif
                        {{-- <img class="card-img-top"
                            src="https://img.freepik.com/free-psd/gaming-console-mockup_47987-2874.jpg?size=626&ext=jpg&ga=GA1.1.659106805.1668234949&semt=sph"
                            alt="..." /> --}}
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div>
                                <!-- Product name-->
                                <h3 class="fw-bolder text-primary">Deskripsi</h3>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Ipsa dolor corrupti porro, sit ex nemo itaque, est
                                    voluptatum illum dignissimos facilis alias facere rem
                                    consequatur?
                                </p>
                                {{-- <div class="mobil-info-list border-top pt-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>Stik</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>CHARGER</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>AUDIO</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>Pendingn</span>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bolder">{{$barang ->name }}</h5>
                                    <div class="rent-price mb-3">
                                        <span style="font-size: 1rem" class="text-primary">@rupiah($barang->harga)/</span>day
                                    </div>
                                </div>
                                <ul class="list-unstyled list-style-group">
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Jenis Barang</span>
                                        <span style="font-weight: 600">{{ $barang->category->name}}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Status</span>
                                        <span style="font-weight: 600">
                                        {{-- @if ($dashboards->tanggal_peminjaman = null)
                                            Tersedia
                                        @else
                                            Tidak tersedia

                                        @endif --}}
                                        Tersedia
                                    </span>
                                    </li>
                                    {{-- <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Tas</span>
                                        <span style="font-weight: 600">Ada</span>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer border-top-0 bg-transparent">
                            <div class="">
                                <a class="" style="text-decoration: none"
                                    href="#">@include('dashboard\create')</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
