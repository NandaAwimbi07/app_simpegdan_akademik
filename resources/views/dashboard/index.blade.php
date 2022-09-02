@extends('layouts.ajax')

@section('content')
    <div class="container py-5 mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 mb-1">
                <img src="{{ asset('img/ilustrator/welcome.svg') }}" class=" img-fluid " alt="">
            </div>
            <div class="col-lg-6 text-right my-auto">
                <h1>Halo kamu,</h1>
                <h3>Selamat datang di aplikasi Simpeg.</h3>
                <p class="text-secondary">Anda dapat memulai untuk manajemen data Dosen, Mahasiswa, Jurusan, dan Program
                    Study, mari manajemen data pegawai
                    Anda bersama kami.</p>
            </div>
        </div>
    </div>
@endsection
