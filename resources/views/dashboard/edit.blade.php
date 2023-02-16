<!-- Button trigger modal -->
<a href="{{ route('user.edit', $dashboard->id) }}" class="badge bg-warning text-dark me-1" data-bs-toggle="modal"
    data-bs-target="#edit"><i class="fas fa-edit"></i></a>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="hulu" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hulu">Update</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.update', $dashboard->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="font-weight-bold" name="balik">Kembalikan</label>
                        <input type="datetime-local" id="meeting-time" name="balik"
                            class="form-control @error('balik') is-invalid @enderror" id="balik" required
                            value="{{ old('balik') }}">
                        @error('balik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary mt-2">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning mt-2">RESET</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    h1 {
        color: rgb(0, 0, 0);
    }

    label {
        color: black;
    }
</style>
