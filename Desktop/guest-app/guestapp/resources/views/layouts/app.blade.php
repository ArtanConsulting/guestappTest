<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Gästebuch</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/css/framework7.material.css">
    
    
    <link rel="stylesheet" href="/css/my-app.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="/css/sweetalert2.min.css"> -->

 
</head>
<body>
        <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Öffnungszeiten:</p>
        <p>7.30 Uhr - 8.30 Uhr, <br/>9.00 Uhr - 15.20 Uhr</p>
        <p>Bestellung Mittagessen bis 10 Uhr</p>
        <a onclick="window.location.href = 'tel:1231231234';"  class="button ripple-blue"><i class="icon icon-form-tel"></i> Ruf uns an </a>
        <a onclick="window.location.href = 'mailto:sample@email.com';"  class="button ripple-blue"><i class="icon icon-form-email"></i> E-mail </a>
      </div>
    </div>
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <p class="buttons">
                  <a href="{{ url('/login') }}" class="button button-raised open-login-screen">Login</a>
                  <a href="{{ url('/form') }}" class="button button-raised">Register</a>
                </p> 
            @else
                <p class="buttons">
                    <a href="#" class="button button-raised"  role="button" >
                        {{ Auth::user()->name }} 
                    </a>
                </p>
                <p class="buttons">
                    
                        <a class="button button-raised" id="logout-link" href="{{ url('/logout') }}">Logout</a>
                </p>
                
            @endif
        </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding" style="padding-left: 30%;">Gästebuch</div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
        </div>
            <!-- Left panel with reveal effect-->

          <div class="content-block-title">What about simple navigation?</div>
          
            @if (!Auth::guest() && Auth::user()->admin)
             <p class="buttons-row"> 
                <a href="{{ url('/service') }}" class="button button-raised">Angemeldet</a>
                <a href="{{ url('/todos') }}" class="button button-raised">Bestellungen</a>
              </p>
              <p class="buttons-row">
                <a href="{{ url('/menu') }}" class="button button-raised">Bearbeiten-Menü</a>
                <a href="{{ url('/days') }}" class="button button-raised">Wochentage</a>
              </p>
            @else
             <p class="buttons-row">
                <a href="{{ url('/days') }}" class="button button-raised">Wochentage</a>
                <a href="#" data-panel="right" class="open-panel button button-raised">Contact</a>
              </p> 
            @endif
             

    @yield('content')
     
   
    </div>
</div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
       <!-- JavaScripts -->
   
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script  src="/js/framework7.js"></script>
    <!-- Path to your app js-->
    <script  src="/js/my-app.js"></script>
    
</body>
</html>
