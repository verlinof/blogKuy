<nav class="navbar py-2 fixed-top navbar-expand-lg bg-white border shadow-lg">
    <div class="container-fluid container-md">
      <a class="navbar-brand fw-bold" href="/">Blog<span class="kuy">Kuy</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'search') ? 'active' : '' }}" href="/search">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'account') ? 'active' : '' }}" href="/account">Account</a>
          </li>
          <li class="nav-item ps-lg-2">
            @if ($isLogin == true)
              <a href="#"><button class="btn btn-outline-danger">Sign Out</button></a>
            @else
              <a href="/login"><button class="btn btn-outline-info">Sign In</button></a>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>