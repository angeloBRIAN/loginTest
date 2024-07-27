<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">LOGIN TEST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      @auth
        <li class="nav-item">
          <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/home">Home</a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link {{ ($title === "welcome") ? 'active' : '' }}" href="/">Welcome</a>
        </li>
      @endauth
      </ul>
      @auth
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi-box-arrow-right"></i>Logout</button>
            </form>
        </li>
      </ul>
      @else
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link {{ ($title === "login") ? 'active' : '' }}" href="/login">Login</a>
        </li>
      </ul>
      @endauth
    </div>
  </div>
</nav>