@php
    $user = Auth::user();
@endphp
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-container">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="r-title-main">
                    @if (isset($isWhite))
                        <span style="color: white" class="r-title-main">
                            SWITZ
                        </span>
                        <img class="switz-logo"
                            src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
                    @else
                        <span>
                            SWITZ
                        </span>
                        <img class="switz-logo"
                            src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
                    @endif
                </div>
                <a class="navbar-togglers d-block me-auto" data-bs-toggle="offcanvas" id='offcanvas' role="button"
                    aria-controls="offcanvasExample">
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                    {{-- <i class="bi bi-chevron-down"></i> --}}
                </a>
            </a>

            <button class="navbar-togglers" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-lg-none">
                    @if (isset($user))
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        <a class="nav-link" href="{{ url('/profile') }}">User Profile</a>
                        <a class="nav-link j-logout">Logout</a>
                    @else
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    {{-- 767px start ng web --}}

    <div class="offcanvas offcanvas-start d-z-index" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="r-title-main" id="offcanvasExampleLabel">SWITZ</h5>
            <img class="switz-logo" src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <div>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown">
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

    {{-- login dropdown --}}
    @if (session('prompt'))
        @php
            $icon = session('icon');
            $text = session('text');
        @endphp
        <script>
            Swal.fire({
                position: 'bottom-end',
                icon: "{{ $icon }}",
                text: "{{ $text }}",
                showConfirmButton: false,
                timer: 1500,
                toast: true
            })
            @if ($icon == 'error')
                $(document).ready(function() {
                    $("#loginModal").modal('show');
                })
            @endif
        </script>
        {{ session(['prompt' => false]) }}
    @endif

    @if (isset($user))
        <div class="dropdown p-2 my-auto d-none d-lg-block">
            <div class="d-flex gap-2">
                @if (isset($isWhite))
                    <span class="d-none d-lg-block my-auto" style="color: white">Welcome {{ $user->fname }}!</span>
                @else
                    <span class="d-none d-lg-block my-auto">Welcome {{ $user->fname }}!</span>
                @endif
                <i class=" dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" style="cursor: pointer;">
                    <img src="https://ui-avatars.com/api/?name={{ $user->fname }}+{{ $user->lname }}&background=random"
                        class="img-profile rounded-circle e-avatar" alt="User Image" width="30" height="30"></i>
                <ul class="dropdown-menu rounded-0 py-0 me-2 mt-2" aria-labelledby="dropdownMenuButton1" class="p-5">
                    <div class="d-flex px-3 tchHover" onclick="window.location='{{ url('/profile') }}'">
                        <span class="dropdown-menu-arrow"></span>
                        <span class="input-group-text bi bi-person-circle p-0 my-2 me-2 jspan-icons-dropdown"
                            id="basic-addon1"></span>
                        <li class="my-auto" style="cursor: pointer;">User Profile</li>
                    </div>
                    <div class="d-flex px-3 tchHover j-logout">
                        <span class="input-group-text bi bi-power p-0 my-2 me-2 jspan-icons-dropdown"
                            id="basic-addon1"></span>
                        <li class="my-auto" style="cursor: pointer;">Logout</li>
                    </div>
                </ul>
            </div>
        </div>
    @else
        <div class="dropdown p-2 my-auto">
            <i class="bi bi-person-circle dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                style="cursor: pointer;"></i>
            <ul class="dropdown-menu rounded-0 py-0 me-2" aria-labelledby="dropdownMenuButton1" class="p-5">
                <div class="d-flex px-3 tchHover" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <span class="dropdown-menu-arrow"></span>
                    <span class="input-group-text bi bi-person-circle p-0 my-2 me-2 jspan-icons-dropdown"
                        id="basic-addon1"></span>
                    <li class="my-auto" style="cursor: pointer;">Login</li>
                </div>
                <div class="d-flex px-3 tchHover" onclick="window.location='{{ url('/register') }}'">
                    <span class="input-group-text bi bi-pencil-fill p-0 my-2 me-2 jspan-icons-dropdown"
                        id="basic-addon1"></span>
                    <li class="my-auto" style="cursor: pointer;">Register</li>
                </div>
            </ul>
        </div>
    @endif
</div>
