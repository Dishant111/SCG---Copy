{{-- extra old header --}}
<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{route('welcome')}}">
    <img src="{{ asset('logo.png') }}" width="30" height="30" alt="{{config('app.name')}}">
    Student Career Guidance
  </a>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-auto">
      {{-- @if (Request::route()->getName()!='login' ) --}}
      {{-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> --}}
    </ul>
  </div>
</nav>