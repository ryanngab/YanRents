@extends('layouts.main')

@section('content')
    <div class="row my-5">
        <div class="col-lg-4">
            <div class="card-data book">
                <div class="row">
                    <div class="col-lg-6">
                        <i class="bi bi-journals"></i>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-center align-items-center">
                        <div class="card-desc">
                            Peminjam
                        </div>

                        <div class="card-count">
                            {{ $dashboards }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @can('Admin')
            <div class="col-lg-4">
                <div class="card-data category">
                    <div class="row">
                        <div class="col-lg-6">
                            <i class="bi bi-tags"></i>
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-center align-items-center">
                            <div class="card-desc">
                                Category
                            </div>

                            <div class="card-count">
                                {{ $category }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('Admin')
            <div class="col-lg-4">
                <div class="card-data user">
                    <div class="row">
                        <div class="col-lg-6">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-center align-items-center">
                            <div class="card-desc">
                                User
                            </div>

                            <div class="card-count">
                                {{ $user }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endcan

        @can('Admin')
            <div class="col-lg-4 mt-5">
                <div class="card-data user">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-center align-items-center">
                            <div class="card-desc">
                                Peminjam
                            </div>

                            <div class="card-count">
                                {{ $dashboards }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endcan

    </div>
@endsection
