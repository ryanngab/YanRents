<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YanOfficial | detail</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg"  style="background-color: #7B8FA1">
        <div class="container">
            <a class="navbar-brand" href="#">
                YanOfficial
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light text-light" style="text-color:#000" href="/#">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->

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
    {{-- footer --}}
    <footer class="bg-dark text-center fixed-bottom color: white;" style="height: 50px; color:white;">
        <p> &copy; 2023 by <a href="https://www.instagram.com/radenmaswibi_/"
                style="text-decoration: none; color: white;" target="_blank">
                YanOfficial
            </a>
        </p>
    </footer>
    {{-- end footer --}}
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
