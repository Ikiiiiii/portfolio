<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/admin">@yield('brand')</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              @yield('logout')
            </ul>
          </div>
    </div>
</nav>