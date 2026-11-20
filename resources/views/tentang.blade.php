@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<h1>Tentang saya</h1>
<p>
  Saya Mohammad Rizki Inzaqi, mahasiswa dengan minat pada infrastruktur
  jaringan dan sistem Linux.
</p>

<section>
  <h2>Pendidikan</h2>
  <ul class="timeline">
    <li><strong>Telkom University</strong><br>2025-2026</li>
    <li><strong>SMA Khadijah Surabaya</strong><br>2025</li>
  </ul>
</section>

<section>
  <h2>Keahlian</h2>
  <ul class="tags">
    <li>Photoshop</li>
    <li>Adobe Premiere</li>
    <li>Filmora</li>
    <li>HTML dan CSS</li>
    <li>Jaringan dasar (IP, subnet)</li>
    <li>VMware Workstation</li>
  </ul>
</section>

<section>
  <h2>Minat</h2>
  <div class="cols">
    <div class="panel">
      <h3>Olahraga</h3>
      <p>Saya suka berolahraga, terutama badminton</p>
    </div>
    <div class="panel">
      <h3>Kuliner</h3>
      <p>Saya menikmati mencoba makanan baru</p>
    </div>
  </div>
</section>
@endsection
