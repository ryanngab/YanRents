
<!-- Button trigger modal -->
<button type="button" class="btn d-flex align-items-center justify-content-center btn-success mt-auto w-100"  data-bs-toggle="modal" data-bs-target="#exampleModal">
    Pesan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-name" id="exampleModalLabel">Silahkan isi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label class="font-weight-bold">Nama Lengkap </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Tanggal Peminjaman</label>
                        <input type="datetime-local" id="meeting-time"name="tanggal_peminjaman" class="form-control @error('name') is-invalid @enderror"
                            id="tanggal_peminjaman" required value="{{ old('tanggal_peminjaman') }}">
                        @error('tanggal_peminjaman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Jenis Barang</label>
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
                        <label for="image" class="form-label">Foto KTP</label>
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

<script>


    // script preview image
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>





