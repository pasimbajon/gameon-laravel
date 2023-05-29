<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('/css/Footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/NavBar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/styles.css')}}">
    
    <title>Game-on</title>
</head>
<body>
    <!-- Nav -->
    <nav class='navbar'>
        <div class='nav-brand'>
            <a href="/" class='gameon-logo'>
                <img class='logo' src="{{url('/images/LOGO/arcade-machine.png')}}" alt='logo'>
            </a>
            <a href="/" class='gameon-brand'>GAME-ON</a>
        </div>
        
        <div class='navbar-links'>
            <ul>
                <li><a class='links' href="/">STORE</a></li>
                <li><a class='links' href="/discover">DISCOVER</a></li>
                <li><a class='links' href="/about">ABOUT</a></li>
                <li>
                  @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                      @auth
                          <a class="links" href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                      @else
                          <a class="links" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                      @endauth
                    </div>
                  @endif
                </li>
            </ul>
        </div>
        <div class='toggle-button'>
            <span class='line'></span>
            <span class='line'></span>
            <span class='line'></span>
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
</body>
</html>