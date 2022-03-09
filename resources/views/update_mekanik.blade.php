<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cess/style.css">
    <script src="https://kit.fontawesome.com/59b72f36fe.js" crossorigin="anonymous"></script>
    <title> {{ $title }}</title>


</head>

<body>
    <h3 class="text-center mt-4 mb-4">Tambah Data Mekanik</h3>

    <div class="container ">


        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/up_mekanik/{{$data->id}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Sparepart</label>
                                <input type="text" name="nama_sparepart" class="form-control @error('nama_sparepart') is-invalid @enderror" value="{{ $data->nama_sparepart }}">
                                @error('nama_sparepart')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Sparepart</label>
                                <input type="text" name="kode_sparepart" class="form-control @error('kode_sparepart') is-invalid @enderror" value="{{ $data->kode_sparepart }}">
                                @error('Kode_sparepart')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ $data->jumlah }}">
                                @error('jumlah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tempat Simpan</label>
                                <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror" value="{{ $data->tempat }}">
                                @error('tempat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Min Stock</label>
                                <input type="number" name="min_stock" class="form-control @error('min_stock') is-invalid @enderror" value="{{ $data->min_stock }}">
                                @error('min_stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Max Stock</label>
                                <input type="number" name="max_stock" class="form-control @error('max_stock') is-invalid @enderror" value="{{ $data->max_stock }}">
                                @error('max_stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            {{-- <button type="button" class="btn btn-primary">Kembali</button> --}}
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</body>