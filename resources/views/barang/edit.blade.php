<!-- Button trigger modal -->
<a href="{{ route('dashboard.edit', $barang->id) }}" class="badge bg-warning text-dark me-1" data-bs-toggle="modal" data-bs-target="#edithg" ><i class="fas fa-edit"></i></a>

<!-- Modal -->
<div class="modal fade" id="hgedit" tabindex="-1" aria-labelledby="hulu" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hulu">Update</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.update', $barang->id) }}" method="POST">
                    @method('put')
                    @csrf
                     <div class="mb-3">
                        <label class="font-weight-bold">Nama Barang</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Nomor Barang</label>
                        <input type="number" class="form-control @error('nomorbarang') is-invalid @enderror" name="nomorbarang"
                            id="nomorbarang" required value="{{ old('nomorbarang') }}">
                        @error('nomorbarang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Harga</label>
                        <input type="number" id="meeting-time" name="harga" class="form-control @error('harga') is-invalid @enderror"
                            id="harga" required value="{{ old('harga') }}">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" name="category_id" id="pilih_category" onclick="tampil_category()">
                            @foreach ($category as $category)
                                @if (old('category_id') == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <img class="img-preview img-fluid mb-3 col-sm-6">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                            name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    h1{
        color: rgb(0, 0, 0);
    }
    strong{
        color: black;
    }
</style>
