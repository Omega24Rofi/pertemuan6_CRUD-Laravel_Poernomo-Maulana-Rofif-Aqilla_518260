<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label for="judul" class="form-label">Judul Buku</label>
        <input type="text" name="judul" id="judul" value="{{ $buku->judul }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" name="penulis" id="penulis" value="{{ $buku->penulis }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" name="harga" id="harga" value="{{ $buku->harga }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="tgl_terbit" class="form-label">Tanggal Terbit</label>
        <input type="date" name="tgl_terbit" id="tgl_terbit" value="{{ $buku->tgl_terbit }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Buku</button>
</form>
