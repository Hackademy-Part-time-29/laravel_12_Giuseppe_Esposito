<nav class="navbar navbar-expand-lg mb-4 primary-bg">
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
          <a class="nav-link" href="#">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contattaci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Crea articolo</a>
        </li>
        <li class="nav-item dropdown me-2 d-flex">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Accedi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Log in</a></li>
            <li><a class="dropdown-item" href="#">Log out</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Registrati</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>