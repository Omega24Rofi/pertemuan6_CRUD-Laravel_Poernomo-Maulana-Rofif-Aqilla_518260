<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-stripped">
            <h1 class="mb-4">Book Lists</h1>
            <a href="{{ route('buku.create')}}" class="btn btn-primary float-start">Tambah Buku</a>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tanggal Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_book as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp. ". number_format($buku->harga, 2, ',', '.') }}</td>
                    <td>{{ $buku->tgl_terbit}}</td>
                    <td>
                        <form action="{{ route('buku.destroy', $buku->id)}}" method = "post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Apakah data ini mau dihapus?')" type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('buku.edit', $buku->id)}}" class="btn btn-secondary">Update</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
