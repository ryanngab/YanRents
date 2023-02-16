@extends('layouts.main')

@section('content')
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                @if ($dashboard->image)
                    <img src="{{ asset('/storage/' . $dashboard->image) }}" alt=" {{ $dashboard->category->name }}"
                        class="img-fluid mt-3 me-5 ms-5" style="width: 400px;">
                    <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{ $dashboard->category->name }}"> -->
                @else
                    <br>
                    <img src="https://source.unsplash.com/1200x400/?{{ $dashboard->category->name }}" class="card-img-top"
                        alt="{{ $dashboard->category->name }}">
                @endif


                <!-- <img src="https://source.unsplash.com/1200x400/?{{ $dashboard->category->name }}" class="card-img-top" alt="{{ $dashboard->category->name }}"> -->
            </div>
            <div class="col-md-6">
                <div class="small mb-1">
                    <h1>Name : {{ $dashboard->name }}</h1>
                    <h6>Barang : {{ $dashboard->category->name }}</h6>
                    <h6>Tanggal Peminjaman : {{ $dashboard->tanggal_peminjaman }}</h6>
                    <h6> Status :
                        @if ($dashboard->tanggal_di_kembalikan)
                            di kembalikan pada {{ $dashboard->tanggal_di_kembalikan }}
                        @else
                            <div class="alert alert-danger" role="alert">
                                Belum di Kembalikan
                            </div>
                        @endif
                    </h6>
                </div>
                {{-- <div class="row">
                    <p>Publisher : {{ $dashboard->created_at }}</p>
                </div> --}}
                {{-- {{--
                <div class=" col-lg-7 mt-5 ms-auto mb-3"> --}}
                    <a href="/dash" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>


                    {{-- <a href="/dashboard/Book/{{ $dashboard->id }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span> Edit</a>

                    <form action="/dashboard/Book/{{ $dashboard->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0 btn-delete"
                            onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i
                                class="fas fa-trash"></i></button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#show">
            Launch demo modal
        </button> --}}

        <!-- Modal -->
        {{-- <div class="modal fade" id="show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6">
                                @if ($dashboard->image)
                                    <img src="{{ asset('/storage/' . $dashboard->image) }}"
                                        alt=" {{ $dashboard->category->name }}" class="img-fluid mt-3 me-5 ms-5"
                                        style="width: 400px;">
                                    <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{ $dashboard->category->name }}"> -->
                                @else
                                    <br>
                                    <img src="https://source.unsplash.com/1200x400/?{{ $dashboard->category->name }}"
                                        class="card-img-top" alt="{{ $dashboard->category->name }}">
                                @endif --}}


                                {{-- <!-- <img src="https://source.unsplash.com/1200x400/?{{ $dashboard->category->name }}" class="card-img-top" alt="{{ $dashboard->category->name }}"> -->
                            </div>
                            <div class="col-md-6">
                                <div class="small mb-1">
                                    <h1>Name : {{ $dashboard->name }}</h1>
                                    <h6>Barang : {{ $dashboard->category->name }}</h6>
                                    <h6>Tanggal Peminjaman : {{ $dashboard->tanggal_peminjaman }}</h6>
                                    <h6> Status :
                                        @if ($dashboard->tanggal_di_kembalikan)
                                            di kembalikan pada {{ $dashboard->tanggal_di_kembalikan }}
                                        @else
                                            <div class="alert alert-danger" role="alert">
                                                Belum di Kembalikan
                                            </div>
                                        @endif
                                    </h6>
                                </div> --}}
                                {{-- <div class="row">
                        <p>Publisher : {{ $dashboard->created_at }}</p>
                    </div> --}}
                                {{--
                    <div class=" col-lg-7 mt-5 ms-auto mb-3">
                        <a href="/dashboard" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my
                            project</a>

                        <a href="/dashboard/Book/{{ $dashboard->id }}/edit" class="btn btn-warning"><span
                                data-feather="edit"></span> Edit</a>

                        <form action="/dashboard/Book/{{ $dashboard->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0 btn-delete"
                                onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i
                                    class="fas fa-trash"></i></button>
                        </form>
                    </div> --}}
                            {{-- </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- <1> --}}
@endsection
