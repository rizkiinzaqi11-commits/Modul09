@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
<h1>Portofolio</h1>
<p>Tiga proyek dan tugas kuliah yang pernah saya kerjakan.</p>

<article class="project">
  <div>
    <h3>Web dan DNS server terintegrasi</h3>
    <p class="meta">Sistem Operasi, 2026</p>
  </div>
  <div>
    <p>
      Membangun Nginx dan BIND pada satu VM Rocky Linux. Situs dibuka
      dari Windows lewat nama domain lokal yang di-resolve oleh DNS
      server di VM yang sama, dengan zone forward dan reverse.
    </p>
    <p class="stack">Rocky Linux, Nginx, BIND, VMware</p>
  </div>
</article>

<article class="project">
  <div>
    <h3>Situs portofolio dengan virtual host</h3>
    <p class="meta">Sistem Operasi, 2026</p>
  </div>
  <div>
    <p>
      Situs yang sedang Anda baca. Dijalankan sebagai server block
      Nginx terpisah dengan zone DNS inzaqi.lab, berdampingan dengan
      situs pertama di server yang sama.
    </p>
    <p class="stack">HTML, CSS, Nginx, SELinux</p>
  </div>
</article>

<article class="project">
  <div>
    <h3>Perancangan UI/UX Aplikasi Seluler Berbasis Design Thinking</h3>
    <p class="meta">Design Thinking, 2026</p>
  </div>
  <div>
    <p>
      Proyek ini bertujuan memecahkan masalah pengguna melalui
      pendekatan Design Thinking untuk menciptakan solusi aplikasi
      seluler yang intuitif. Saya melakukan riset pengguna serta
      merancang wireframe hingga prototipe interaktif menggunakan
      Figma. Hasilnya berupa prototipe high-fidelity yang siap diuji
      dan dikembangkan lebih lanjut.
    </p>
    <p class="stack">Figma, FigJam</p>
  </div>
</article>
@endsection
