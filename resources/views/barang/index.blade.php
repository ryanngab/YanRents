@extends('layouts.main')

@section('content')
@include('barang.create')

    <div class="row">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="card shadow p-3 mb-5">
                <div class="card-header ">
                    <h2>Data Barang
                    </h2>
                    @if (session('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('berhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="table-responsive col-lg-12">
                    {{-- <a href="{{ route ('admin.pdf')}}" class="btn btn-danger mb-3 mt-5 mb-4"> pdf </a>
                <a href="{{ route ('admin.create')}}" class="btn btn-success mb-3 mt-5 mb-4"> Excel </a> --}}
                    <table class="table table-striped table-dark table-sm table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Merek Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Nomor Barang</th>
                                <th scope="col">Category</th>
                                <th scope="col">image</th>
                                <th scope="col" style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                @foreach ($barang as $br)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $br->name }}</td>
                                <td class="text-center">Rp:{{ $br->harga }}</td>
                                <td class="text-center">{{ $br->nomorbarang }}</td>
                                {{-- <td class="text-center">{{ $br->tanggal_di_kembalikan }}</td> --}}
                                <td class="text-center">{{ $br->category->name }}</td>
                                <td>
                                    @if ($br->image)
                                        <img src="{{ asset('/storage/' . $br->image) }}"
                                            alt=" {{ $br->category->name }}"
                                            style="max-height: 80px; width: 100%; overflow: hidden">
                                        {{-- <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$br->category->name }}"> --> --}}
                                    @else
                                        <br>
                                        <img src="https://source.unsplash.com/1200x400/?{{ $br->category->name }}"
                                            width="200px" alt="{{ $br->category->name }}">

                                        {{-- <!-- <img src="https://source.unsplash.com/1200x400/?{{ $br ->category->name }}" class="card-img-top" alt="{{$br->category->name }}"> --> --}}
                                    @endif

                                </td>
                                <td class="">
                                    <a href="{{ route('dashboard.show', $br->id) }}" class="badge bg-info text-dark me-1"><i class="bi bi-eye"></i></a>
                                {{-- @include('barang.edit') --}}
                                    <form onsubmit="return confirm('apa anda yakin?');"
                                        action="{{ route('dashboard.destroy', $br->id) }}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="badge bg-danger border-0 btn-delete" id="hapus"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <style>
        #hapus{
            font-size: 10px;
            float: right
        }
    </style> --}}
@endsection
