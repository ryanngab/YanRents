<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YanOfficial</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">
                YanOfficial
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light text-light" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->

    {{-- carousels --}}
    <div id="carouselExampleInterval" class="carousel slide " style="max-height: 440px; max-width:120%"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.freepik.com/free-vector/ticket-champion-gaming-design-gradient-colorful_483537-1974.jpg?size=626&ext=jpg&ga=GA1.1.659106805.1668234949&semt=ais"
                    class="d-block w-100" alt="..." style="max-height: 440px">
            </div>
        </div>
    </div>
    {{-- end carousels --}}

    {{-- jumbotron --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h3>YanOfficial</h3>
                <a href="/register" class="btn btn-success">Register dulu bray!</a>
            </div>
            <div class="col-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, in dolores laborum velit
                    cupiditate dolorem? Quis iusto quasi enim obcaecati culpa quibusdam molestias perspiciatis?
                    Necessitatibus aut quis in explicabo rerum quibusdam eveniet omnis. Libero vel eveniet debitis alias
                    corrupti repellat animi commodi placeat quam necessitatibus. Iusto eligendi cum, amet veritatis sit
                    natus officia quisquam! Illo sit alias quisquam praesentium nihil.</p>
            </div>
        </div>
    </div>
    {{-- end jummbotron --}}
    <br><br>

    <!-- Section-->
    <section style="background-color: #198754">
        <div class="container mt-5">
            <div class="row text-center text-white">
                <h2 class="mt-2 mb-2">Daftar Barang Rental</h2>
                <hr class="solid">
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($barang as $barang)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge badge-custom bg-warning text-white position-absolute"
                                style="top: 0; right: 0">
                                Tesedia
                            </div>
                            <!-- Product image-->
                            @if ($barang->image)
                                <img src="{{ asset('/storage/' . $barang->image) }}" class="card-img-top"
                                    alt=" {{ $barang->name }}"
                                    style="max-height: 80px; width: 100%; overflow: hidden">
                                {{-- <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$br->category->name }}"> --> --}}
                            @else
                                <br>
                                <img src="https://source.unsplash.com/1200x400/?{{ $barang->name }}" class="card-img-top"
                                    width="200px" alt="{{ $barang->name }}">

                                {{-- <!-- <img src="https://source.unsplash.com/1200x400/?{{ $br ->category->name }}" class="card-img-top" alt="{{$br->category->name }}"> --> --}}
                            @endif
                            <!-- Product details-->
                            <div class="card-body card-body-custom pt-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$barang->name}}</h5>
                                    <!-- Product price-->
                                    <div class="rent-price mb-3">
                                        <span class="text-primary">@rupiah($barang->harga)/</span>day
                                    </div>
                                    {{-- <ul class="list-unstyled list-style-group">
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Listrik yg digunakan</span>
                                            <span style="font-weight: 600">100w</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Jumlah Stik</span>
                                            <span style="font-weight: 600">5</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Tas</span>
                                            <span style="font-weight: 600">Ada</span>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a href="#">@include('dashboard.create')</a>
                                    <a class="btn btn-info mt-auto text-white" href="/detail">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- message --}}

    <div class="container mt-5">
        <div class="row text-center text-dark">
            <h2 class="mt-2 mb-2">Message</h2>
            <hr class="solid">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="/" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" name="name" placeholder="input your name">
                        </div>
                        <label for="message" class="form-label">Message :</label>
                        <textarea name="message" id="message" class="form-control"></textarea>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <br>
            </div>
        </div>
    </div>
    <br>
    {{-- end message --}}
    {{-- footer --}}
    <footer class="bg-dark text-center color: white;" style="height: 30px; color:white;">
        <p> &copy; 2023 by <a href="https://www.instagram.com/radenmaswibi_/"
                style="text-decoration: none; color: white;" target="_blank">
                Dragon991
            </a>
        </p>
    </footer>
    {{-- end footer --}}
    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
