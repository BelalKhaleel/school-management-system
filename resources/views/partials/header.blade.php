<header class="top-navbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbars-host">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Course </a>
            <div class="dropdown-menu" aria-labelledby="dropdown-a">
              <a class="dropdown-item" href="course-grid-2.html">Course Grid 2 </a>
              <a class="dropdown-item" href="course-grid-3.html">Course Grid 3 </a>
              <a class="dropdown-item" href="course-grid-4.html">Course Grid 4 </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
            <div class="dropdown-menu" aria-labelledby="dropdown-a">
              <a class="dropdown-item" href="blog.html">Blog </a>
              <a class="dropdown-item" href="blog-single.html">Blog single </a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="teachers.html">Teachers</a></li>
          <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
        @guest
          <ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
          </ul>
        @endguest
        @auth
          <ul class="nav navbar-nav navbar-right">
              <li><a class="hover-btn-new log orange" href="/logout" ><span>Logout</span></a></li>
          </ul>
        @endauth
      </div>
    </div>
  </nav>
</header>