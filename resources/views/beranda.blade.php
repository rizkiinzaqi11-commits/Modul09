@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="hero">
  <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Avatar Mohammad Rizki Inzaqi">
  <div>
    <span class="nim">NIM 108052500044</span>
    <h1>Mohammad Rizki Inzaqi</h1>
    <p class="lead">
      Mahasiswa yang sedang mendalami jaringan komputer dan administrasi
      server Linux. Situs ini adalah hasil UTS: dilayani oleh Nginx di
      Rocky Linux dan dialamatkan lewat DNS BIND buatan sendiri.
    </p>
    <div class="btns">
      <a class="tombol" href="{{ route('portofolio') }}">Lihat portofolio</a>
      <a class="tombol alt" href="{{ route('tentang') }}">Tentang saya</a>
    </div>
  </div>
</div>

<section>
  <h2>Yang sedang saya kerjakan</h2>
  <div class="cols">
    <div class="panel">
      <h3>Web server</h3>
      <p>
        Menyajikan beberapa situs dari satu server dengan name-based
        virtual host di Nginx.
      </p>
    </div>
    <div class="panel">
      <h3>DNS server</h3>
      <p>
        Mengelola zone forward dan reverse di BIND, lalu menguji
        resolusinya dari komputer lain.
      </p>
    </div>
    <div class="panel">
      <h3>Linux</h3>
      <p>
        Belajar mengatur jaringan, izin berkas, dan SELinux di Rocky
        Linux.
      </p>
    </div>
  </div>
</section>
@endsection
