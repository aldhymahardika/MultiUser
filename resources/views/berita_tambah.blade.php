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
                    CRUD Data Pegawai - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/pegawai" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/berita/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul berita ..">

                            @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                         <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori" class="form-control" placeholder="Kategori berita ..">

                            @if($errors->has('kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('kategori')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Ringkasan Berita</label>
                            <textarea name="ringkasan_berita" class="form-control" placeholder="Ringkasan berita .."></textarea>

                             @if($errors->has('ringkasan_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('ringkasan_berita')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Full Berita</label>
                            <textarea name="full_berita" class="form-control" placeholder="Full berita .."></textarea>

                             @if($errors->has('full_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('full_berita')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>