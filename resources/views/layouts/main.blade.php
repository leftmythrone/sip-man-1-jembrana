<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/logo.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Partials --}}
    <link rel="stylesheet" href="/css/partials/sidebar.css">
    
    {{-- Title tab page --}}
    <title>SIP Madrasah Aliyah 1 | {{ $title }}</title>
  </head>

  {{-- Body section --}}
  <body>

    {{-- Main portal --}}
    @if ( $gate === "access" )
      
      {{-- Out of portal --}}
      <link rel="stylesheet" href="/css/layouts/main.css">
      
        {{-- User Admin --}}
        @if ( auth()->user()->roles->level === 'Admin' )
          
        {{-- Panggil sidebar Admin--}}
        <header>
          @include('partials.sidebar')
        </header>
        
        {{-- Panggil isi Admin--}}
          <div class="main-layout">
            @yield('gate')
          </div>


            
        {{-- User kepala sekolah --}}
        @else
              
          {{-- Akses security --}}
          @if ( $title === "Dashboard" || $title === "Penjadwalan" )
          
            {{-- Panggil isi kepala sekolah --}}
            <div class="main-layout">
              @yield('gate')
            </div>

            {{-- Panggil sidebar kepala sekolah --}}
            <header>
              @include('partials.sidebar')
            </header>

          {{-- Show Page Can't Be Access --}}
          @else
            <link rel="stylesheet" href="/css/partials/error.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
            
            {{-- Panggil halaman Error --}}
            @include('partials.error')
          @endif
              
        @endif

    {{-- Else portal --}}
    @else
      <header>
        @yield('gate')
      </header>
    @endif

  </body>
</html>
