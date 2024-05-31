<nav id="navbar" class="navbar navbar-expand-lg mb-4 primary-bg scrolledNavbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about-us')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact-us')}}">Contattaci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles')}}">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('create-article')}}">Crea articolo</a>
        </li>
        <li class="nav-item dropdown me-2 d-flex">
          @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto, {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" onclick="
            event.preventDefault();
            getElementById('form-logout').submit();
            ">Log out</a></li>
          <form id="form-logout" class="d-none" method="POST" action="/logout">
              @csrf
          </form>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ospite</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item d-flex align-items-center" href="/login">Accedi</a></li>
            <hr>
            <li><a class="dropdown-item d-flex align-items-center" href="/register">Registrati</a></li>
          </ul>
          @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>