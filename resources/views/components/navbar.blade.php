<nav class="navbar navbar-expand-lg  bg-navbar sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand a-color" href="{{route('homepage')}}"> <img src="https://bibirra.it/wordpress/wp-content/themes/directory2-child/design/img/logo.png" alt="" class="img-fluid font-size-img ms-2"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-ellipsis-h fs-2 i-color"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active a-color" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link a-color" href="{{route('brewery.index')}}">Birrerie</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link a-color" href="{{route('brewery.create')}}">Inserisci Birreria</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle a-color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ciao, {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="{{route('logout')}}" class="dropdown-item text-color-2 a-color" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a></li>
              <form method="POST" action="{{route('logout')}}"  id="form-logout">
              @csrf
              </form>
              </ul>
          </li>

        </ul>
        @endauth
        @guest
        <li class="nav-item">
            <a class="nav-link a-color" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
            <a class="nav-link a-color" href="{{route('login')}}">Login</a>
        </li>
        @endguest
      </div>
    </div>
  </nav>
