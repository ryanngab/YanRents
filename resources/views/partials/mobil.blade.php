<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 400px;
            margin: 50px 50px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <section style="background-color: #808080">
        <div class="container mt-5">
            <div class="row text-center text-white">
                <h2 class="mt-2 mb-2">Daftar Barang Rental</h2>
                <hr class="solid">
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($barang as $barang)
                            <!-- Swiper -->
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col mb-5">
                                        <div class="card h-100">
                                            <!-- Sale badge-->
                                            <div class="badge badge-custom bg-warning text-white position-absolute"
                                                style="top: 0; right: 0">
                                                {{-- @if ($barang->dashboards->tanggal_dikembalikan = null)
                                                    tersedia
                                                @else
                                                   tidak tersedia
                                                @endif --}}
                                                Tersedia
                                            </div>
                                            <!-- Product image-->
                                            @if ($barang->image)
                                                <img src="{{ asset('/storage/' . $barang->image) }}"
                                                    class="card-img-top" alt=" {{ $barang->name }}"
                                                    style="max-height: 700px; width: 100%; overflow: hidden">
                                                {{-- <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$br->category->name }}"> --> --}}
                                            @else
                                                <br>
                                                <img src="https://source.unsplash.com/1200x400/?{{ $barang->name }}"
                                                    class="card-img-top" style="max-height: 700px; width: 100%;"
                                                    alt="{{ $barang->name }}">

                                                {{-- <!-- <img src="https://source.unsplash.com/1200x400/?{{ $br ->category->name }}" class="card-img-top" alt="{{$br->category->name }}"> --> --}}
                                            @endif
                                            <div class="card-body" style="max-height: 200px">
                                                <h3 class="card-title">{{ $barang->name }}</h3>
                                                <h5 class="card-text"> @rupiah ($barang->harga)/Hari</h5>
                                            </div>
                                            <div class="card-footer border-top-0 bg-transparent">
                                                <div class="text-center">
                                                    <a class="btn btn-info mt-auto text-white"
                                                        href="{{ Route('partials.detail', $barang->id) }}">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination "></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    </script>
</body>

</html>
