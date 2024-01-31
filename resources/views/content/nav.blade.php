<nav class="navbar navbar-expand-lg shadow" style="background-color: #DBE7C9;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="/">Tektokan <i class="fa-brands fa-rocketchat"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item me-5">
            <a class="nav-link {{ Request::is('/*') ? 'active' : "" }}" href="/">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('message*') ? 'active' : ''}}" href="/message">Message</a>
          </li>
        </ul>
      </div>
      <form action="/logout" method="post">
        @csrf
        <div class="ms-auto">
            <button type="submit" class="btn btn-primary logout" href="">Logout</button>
          </div>
    </form>

    </div>
  </nav>
