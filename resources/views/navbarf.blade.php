<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('forum') }}">FORUM YAMAHA JUPTER MX</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse justify-content-center" id="navbarsExampleDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <?php if (Session::get('login')) : ?>
            <a class='nav-link' href={{ url('user/logout') }} >Hallo {{ (Session::get('username')) }}</a>
        <?php else : ?>
            <a class='nav-link' href={{ url('user/login') }}>Login</a>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</nav>