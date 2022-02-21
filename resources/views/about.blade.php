@extends('layouts.main')

@section('container')
     <h1> Tentang Saya</h1>
     <br>
     Dibuat oleh : {{ $name }}
     <br>
     Email       : {{ $email }}
@endsection
    