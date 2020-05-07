<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
   <div class="container">
      <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ">
        <li class="nav-item {{ set_active_route('root_path') }}">
          <a class="nav-link" href="{{ route('root_path') }}">Accueil</a>
        </li>
        <li class="nav-item {{ set_active_route('tarif_path') }}">
          <a class="nav-link" href="{{ route('tarif_path') }}">Nos tarifs</a>
        </li>
        <li class="nav-item {{ set_active_route('about_path') }}">
          <a class="nav-link" href="{{ route('about_path') }}">Apropos</a>
        </li>
        <li class="nav-item {{ set_active_route('blog_path') }}">
          <a class="nav-link" href="{{ route('blog_path') }}">Blog</a>
        </li>
        <li class="nav-item {{ set_active_route('contact_path') }}">
          <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
        </li>
      </ul>
    </div>     
   </div>
  </nav>