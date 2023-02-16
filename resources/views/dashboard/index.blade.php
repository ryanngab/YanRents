@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="card shadow p-3 mb-5">
                <div class="card-header ">
                    <h2>Data Project
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
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Nomor Barang</th>
                                <th scope="col">Di pinjam</th>
                                <th scope="col">Di kembalikan</th>
                                <th scope="col">Barang</th>
                                <th scope="col">image</th>
                                <th scope="col" style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                @foreach ($dashboards as $dashboard)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $dashboard->name }}</td>
                                <td class="text-center">{{ $dashboard->id }}</td>
                                <td class="text-center">{{ $dashboard->tanggal_peminjaman }}</td>
                                <td>
                                    @if ($dashboard->balik)
                                        {{ $dashboard->balik }}
                                    @else
                                        <div class="alert alert-danger" role="alert">
                                            Belum di Kembalikan
                                        </div>
                                    @endif
                                </td>
                                {{-- <td class="text-center">{{ $dashboard->tanggal_di_kembalikan }}</td> --}}
                                <td class="text-center">{{ $dashboard->category->name }}</td>
                                <td>
                                    @if ($dashboard->image)
                                        <img src="{{ asset('/storage/' . $dashboard->image) }}"
                                            alt=" {{ $dashboard->category->name }}"
                                            style="max-height: 80px; width: 100%; overflow: hidden">
                                        {{-- <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$dashboard->category->name }}"> --> --}}
                                    @else
                                        <br>
                                        <img src="https://source.unsplash.com/1200x400/?{{ $dashboard->category->name }}"
                                            width="200px" alt="{{ $dashboard->category->name }}">

                                        {{-- <!-- <img src="https://source.unsplash.com/1200x400/?{{ $dashboard ->category->name }}" class="card-img-top" alt="{{$dashboard->category->name }}"> --> --}}
                                    @endif

                                </td>
                                <td class="">
                                    <form onsubmit="return confirm('apa anda yakin?');"
                                        action="{{ route('user.destroy', $dashboard->id) }}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="badge bg-danger border-0 btn-delete" id="hapus"><i class="bi bi-trash"></i></button>
                                    </form>
                                        <a href="{{ route('user.show', $dashboard->id) }}" class="badge bg-info text-dark me-1"><i class="bi bi-eye"></i></a>
                                        @include('dashboard.edit')

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
