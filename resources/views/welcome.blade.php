 <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YanOfficial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
<link
 rel="stylesheet"
 href="node_modules/swiper/swiper-bundle.min.css"
/>
<script src="node_modules/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    {{-- Awal Navbar --}}
        <nav class="navbar navbar-dark navbar-expand-lg " style="background-color: #7B8FA1">
            <div class="container">
            <a class="navbar-brand" href="#">
            <img src="/img/icon-1.png" alt="Logo" width="30" height="25" class="d-inline-block align-text-top "> YanOfficial </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Novel</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/dash">Dashboard</a></li>
                            </ul>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline primary bg-lg" href="/login"> Login </a>
                            </li>
                        </li>
                    </ul>
                    {{-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> --}}
                </div>
            </div>
        </nav>
    {{-- Akhir Navbar --}}

    {{-- carousels --}}
        <div id="carouselExampleInterval" class="carousel slide " style="max-height: 400px; max-width:100%"
            data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src=""
                        class="d-block w-100" alt="..." style="max-height: 400px">
                </div>

                <div class="carousel-item" data-bs-interval="1000">
                    <img src="https://img.freepik.com/premium-vector/special-offer-banner-template-design-web-social-media_39705-357.jpg?size=626&ext=jpg&ga=GA1.1.816235923.1668582130&semt=sph"
                        class="d-block w-100" alt="..." style="max-height: 400px">
                </div>

                <div class="carousel-item" data-bs-interval="1000">
                    <img src="https://img.freepik.com/free-vector/shopping-day-flash-sale-design-with-66-number-podium-falling-confetti-6-june-special-offer_1314-3338.jpg?size=626&ext=jpg&ga=GA1.2.816235923.1668582130&semt=sph"
                        class="d-block w-100" alt="..." style="max-height: 400px">
                </div>
            </div>
            <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    {{-- end carousels --}}


    {{-- Awal Jumbtron --}}
        <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-4">
                    <h2>Ryan Rents</h2>
                    <a href="/register" class="btn btn-outline-primary">Ayo Daftar sekarang</a>
                </div>
                <div class="col-8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione libero suscipit nulla tempore at architecto sit alias dicta labore in, nostrum quae facilis ipsa magni, animi vero voluptas, cum facere. Officiis pariatur ullam saepe repudiandae! Excepturi ut sequi vero inventore.</p>
                </div>
            </div>
        </div>
    {{-- Akhir Jumbtron --}}



@include('partials.mobil')
    {{-- Awal Akhir Popular book --}}

    {{-- Awal Contact --}}
        <div class="container">
            <div class="row text-center">
                @if(session()->has('berhasil'))
                                <div class="alert alert-success col-lg-10" role="alert">
                                    {{ session('berhasil')}}
                                </div>
                                @endif
                <h2>Message</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form action="/" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    {{-- Akhir Contact --}}

    {{-- Awal Footer --}}
        <footer class=" bg-secondary text-center mt-3" id="footer" style="height: 40px">
            <p>Creatd By <a href="https://github.com/ryanngab" style="text-decoration:none; color:white;" target="blank_" >Muhamad Riyan Firdaus</a></p>
        </footer>
    {{-- Akhir Footer --}}
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script>
    const swiper = new Swiper('.swiper', {
        loop: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

</script>
</body>

</html>
