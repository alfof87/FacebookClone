{{-- @include('partials.header') --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app1.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{-- {{ config('app.name', 'Laravel') }} --}}
                <img id="facebook" src="/img/facebook.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                @auth
                  <div class="icons">
                    <a href="#"><i class="fas fa-home"></i></a>
                    <a href="show"><i class="fas fa-user"></i></a>
                    {{-- @foreach ($conts as $cont)
                      <a href="{{ route('show', $cont -> id) }}"><i class="fas fa-user"></i></a>
                    @endforeach --}}
                    <a href="#"><i class="far fa-flag"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  </div>

                @endauth
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
  <div id="cover-img">
    <div class="profile-picture">
      <img src="{{ asset('img/profile.jpg') }}" alt="">
    </div>
  </div>
  <div class="name">
    <h2>Alfonso Ferrara</h2>
  </div>
  <div class="name">
    <a href="#"><strong>aggiungi una biografia</strong></a>
  </div>
  <hr>
  <div id="content-menu">
    <div id="left-menu">
      <div class="recap">
        <h4>In breve</h4>
        <p><i class="fas fa-university"></i> Ha frequentato ITIS Alessandro Volta</p>
        <p><i class="far fa-clock"></i> Iscrizione: Ottobre 2008</p>
        <p><i class="fas fa-users"></i> Follower: 47</p>
        <button class="btn btn-primary" type="button" name="button">Modifica dettagli</button>
        <button class="btn btn-primary" type="button" name="button">Aggiungi Hobby</button>
        <div class="evidents-imgs">
          <div class="first-img">
            <img src="{{ asset('img/idea.png') }}" alt="">
            <img src="{{ asset('img/bird.jpg') }}" alt="">
            <img src="{{ asset('img/lake.jpg') }}" alt="">
          </div>
          <div class="second-img">
            <img src="{{ asset('img/river.jpg') }}" alt="">
            <img src="{{ asset('img/mont.jpg') }}" alt="">
            <img src="{{ asset('img/jap.jpeg') }}" alt="">
          </div>
      </div>
        <button class="btn btn-primary" type="button" name="button">Modifica contenuti in evidenza</button>
      </div>
      <br>
      <div class="foto">
        <h4>Foto</h4>
        <div class="evidents-imgs">
          <div class="first-img">
            <img src="{{ asset('img/idea.png') }}" alt="">
            <img src="{{ asset('img/bird.jpg') }}" alt="">
            <img src="{{ asset('img/lake.jpg') }}" alt="">
          </div>
          <div class="second-img">
            <img src="{{ asset('img/river.jpg') }}" alt="">
            <img src="{{ asset('img/mont.jpg') }}" alt="">
            <img src="{{ asset('img/jap.jpeg') }}" alt="">
          </div>
          <div class="first-img">
            <img src="{{ asset('img/idea.png') }}" alt="">
            <img src="{{ asset('img/bird.jpg') }}" alt="">
            <img src="{{ asset('img/lake.jpg') }}" alt="">
          </div>
      </div>
      </div>
    </div>
    <div id="right-menu">
      <div class="container-input">
        <input id="new-message-input" type="text" placeholder="A cosa stai pensando?" name="" value="">
        <button id="btn" type="button" name="button"><strong>Pubblica</strong></button>
      </div>

       <div id="template-message-sent">
        <div class="msg-sent">
          <img src="{{ asset('img/profile.jpg') }}" alt="">
          <span class="time"></span>
          <div class="">
            <span><strong>Me</strong></span>
          </div>
          <div class="">
            <span id="message-sent"></span>
          </div>

        </div>
      </div>

      <div class="">

          <div id="target" class="messages scrollbar">

          </div>

        <div class="users">
          <img src="{{ asset('img/profile.jpg') }}" alt="">
          <br>
          <span><strong>Me</strong></span>
          {{-- <span id="timepost"></span> --}}
          {{-- <div id="newpost"></div> --}}
          <p>Buongiorno a tutti amici! Oggi è una bellissima giornata!</p>

        </div>

        <div class="users">
          <img src="{{ asset('img/profile.jpg') }}" alt="">
          <br>
          <span><strong>Me</strong></span>
          {{-- <span id="timepost"></span> --}}
          {{-- <div id="newpost1"></div> --}}
          <p>Un uomo entra in un caffe. Ma nota che manca l’accento, così con un pennarello gigante aggiunge l’accento mancante. E se ne va… Caffè corretto.</p>

        </div>
        <div class="users">
          <img src="{{ asset('img/profile.jpg') }}" alt="">
          <br>
          <span><strong>Me</strong></span>
          {{-- <span id="timepost"></span> --}}
          {{-- <div id="newpost2"></div> --}}
          <div id="img-public">
            <img src="{{ asset('img/paesaggio.jpg') }}" alt="">
          </div>
        </div>

      </div>

      </div>
    </div>
</div>
