<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Mohammad Rizki Inzaqi</title>
    @vite('resources/sass/app.scss')
  </head>
  <body>
    <header>
      <div class="wrap">
        <a class="brand" href="{{ route('beranda') }}">inzaqi.lab</a>
        <nav aria-label="Menu utama">
          <a href="{{ route('beranda') }}" @if(request()->routeIs('beranda')) aria-current="page" @endif>Beranda</a>
          <a href="{{ route('tentang') }}" @if(request()->routeIs('tentang')) aria-current="page" @endif>Tentang</a>
          <a href="{{ route('portofolio') }}" @if(request()->routeIs('portofolio')) aria-current="page" @endif>Portofolio</a>
          <a href="{{ route('kontak') }}" @if(request()->routeIs('kontak')) aria-current="page" @endif>Kontak</a>
        </nav>
      </div>
    </header>

    <main>
      <div class="wrap">
        @yield('content')
      </div>
    </main>

    <footer>
      <div class="wrap">
        <p>MOHAMMAD RIZKI INZAQI_108052500044</p>
        <p>Hosted on inzaqi.lab — Nginx on Rocky Linux</p>
      </div>
    </footer>

    @vite('resources/js/app.js')
  </body>
</html>
