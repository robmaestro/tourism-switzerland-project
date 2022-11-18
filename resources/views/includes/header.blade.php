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
            
            {{-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Home
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li> --}}
                  {{-- <a class="nav-link" aria-current="page" href="#">Home</a> --}}
                  {{-- <a class="nav-link" href="#">Login</a>
                  <a class="nav-link" href="#">Register</a>
                  <a class="nav-link" href="#">My List</a>
                </div>
            </div> --}}
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
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
          </div>
          <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
              Home
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>
              <li><a class="dropdown-item" href="#">My List</a></li>

            </ul>
            <a class="nav-link" href="#">Login</a>
            <a class="nav-link" href="#">Register</a>
            <a class="nav-link" href="#">My List</a>
          </div>
        </div>
      </div>

    <!-- Button trigger modal -->
<i type="button" class="bi bi-person-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
</i>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Modal Body - Testing
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
