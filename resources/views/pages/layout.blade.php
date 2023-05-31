<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('/css/Footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/NavBar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/styles.css')}}">
    
    <title>Game-on</title>
</head>
<body>
    <!-- Nav -->
    @include('pages.navbar')
    
    <nav class="navbar navbar-expand-lg bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="/">GAME-ON</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
          <ul class="navbar-nav justify-content-center mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="/">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/discover">Discover</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/about">About</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                      @auth
                          <a class="nav-link text-light" href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                      @else
                          <a class="nav-link text-light" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                      @endauth
                    </div>
                  @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="main-content">
        @yield('content')
    </div>
    <div class='Footer'>
        <div class='Footer-Content'>
          <div class='Trending'>
            <h3>Trending</h3>
            <div class='game-links'>
              <a href="/discover/counter-strike_global_offensive" class='link'>Counter-Strike: Global Offensive</a>
              <a href="/discover/dota_2" class='link'>DOTA 2</a>
              <a href="/discover/apex_legends" class='link'>Apex Legends</a>
              <a href="/discover/pubg_battlegrounds" class='link'>PUBG: BATTLEGROUNDS</a>
              <a href="/discover/grand_theft_auto_V" class='link'>Grand Theft Auto V</a>
              <a href="/discover/rust" class='link'>Rust</a>
              <a href="/discover/war_thunder" class='link'>War Thunder</a>
              <a href="/discover/team_fortress_2" class='link'>Team Fortress 2</a>
            </div>
          </div>
          <div class='Contacts'>
            <div class='contact-icons'>
              <img class='logo' src="{{url('/images/ICONS/facebook.png')}}" alt='logo'>
              <img class='logo' src="{{url('/images/ICONS/instagram.png')}}" alt='logo'>
              <img class='logo' src="{{url('/images/ICONS/twitter.png')}}" alt='logo'>
            </div>
          </div>
          <div>
            <p>© Game-On All rights reserved. All trademarks and registered trademarks are the property of their respective owners.</p>
            <p>Use of this Web site constitutes acceptance of the Terms and Conditions and Privacy policy. All copyrights, trade marks, service marks belong to the corresponding owners.</p>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>