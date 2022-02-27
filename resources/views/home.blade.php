@extends('layouts.main')

@section('container')
    <h1> KATEGORI </h1>
    <div class="container mt-5">
        
        <div class="row justify-content-start">
            <div class="category col-4">
                <a href="in_mekanik">
                <div> <button type="button" class="btn ">
                        <img src="images/bearing.jpg" class="img-fluid " alt="Gambar Mekanik">
                        Mekanik
                    </button>
                </div>
            </a>
            </div>


            <div class="category col-4">
                <div><button type="button" class=" btn">
                        <img src="images/relay.jpg" class="img-fluid" alt=" Gambar Mekanik">
                        Kelistrikan
                    </button>
                </div>
            </div>

            <div class="category col-4">
                <div><button type="button" class=" btn  ">
                        <img src="images/paku_beton.jpg" class="img-fluid" alt=" Gambar Mekanik">
                        Bangunan
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
