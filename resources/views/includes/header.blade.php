<div class="header">

    <nav class="navbar navbar-expand-lg navbar-container">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="r-title-main">
                    <h5>
                        SWITZ
                    </h5>
                    <img class="switz-logo" src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
                </div>
            </a>

            <a class="navbar-togglers" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <i class="bi bi-chevron-down"></i>
              </a>

            {{-- <button class="navbar-togglers" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="#">Login</a>
                  <a class="nav-link" href="#">Register</a>
                  <a class="nav-link" href="#">My List</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- <i class="bi bi-person-circle"></i> --}}

    {{-- 767px start ng web --}}
      
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="r-title-main" id="offcanvasExampleLabel" >SWITZ</h5>
            <img class="switz-logo" src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
          <div>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
              Add Destination
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Rhine Falls</a></li>
              <li><a class="dropdown-item" href="#">Zurich</a></li>
              <li><a class="dropdown-item" href="#">Lucerne</a></li>
              <li><a class="dropdown-item" href="#">Interlaken</a></li>
              <li><a class="dropdown-item" href="#">Saint Moritz</a></li>
              <li><a class="dropdown-item" href="#">Bern</a></li>
              <li><a class="dropdown-item" href="#">Matterhorn</a></li>
              <li><a class="dropdown-item" href="#">Lake Geneva</a></li>
              <li><a class="dropdown-item" href="#">Swiss National Park</a></li>
              <li><a class="dropdown-item" href="#">Jungfraujoch</a></li>
            </ul>
          </div>
        </div>
      </div>

      {{-- Dropdown Profile Darkmode--}}
      <div class="dropdown">
        <i type="button" class="bi bi-person-circle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        </i>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">User<i type="button" class="bi bi-person-circle"></i></a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/userDetails">Profile</a></li>
          <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
      </div>






</div>
