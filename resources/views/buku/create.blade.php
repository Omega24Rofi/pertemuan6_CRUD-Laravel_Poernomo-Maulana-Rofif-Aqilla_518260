   <div class="container">
        <h4></h4>
        <form action="{{route('buku.store')}}" method="post">
            @csrf
            <div>Judul          :<input type="text" name="judul"></div>
            <div>Penulis        :<input type="text" name="penulis"></div>
            <div>Harga          :<input type="text" name="harga"></div>
            <div>Tanggal terbit :<input type="date" name="tgl_terbit"></div>
            <button type="submit">Simpan</button>
            <a href="{{"/buku"}}">Kembali</a>
        </form>
    </div>
