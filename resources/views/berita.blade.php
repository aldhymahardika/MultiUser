<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Eloquent Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai
                </div>
                <div class="card-body">
                    <a href="/berita/tambah" class="btn btn-primary">Input Pegawai Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Ringkasan Berita</th>
                                <th>Full Berita</th>
                                <th>Waktu</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($berita as $b)
                            <tr>
                                <td>{{ $b->judul }}</td>
                                <td>{{ $b->kategori }}</td>
                                <td>{{ $b->ringkasan_berita }}</td>
                                <td>{{ $b->full_berita }}</td>
                                <td>{{ $b->created_at }}</td>
                                <td>
                                    <a href="/berita/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/berita/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>