@php
    $user = Auth::user();
@endphp
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-container">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="r-title-main">
                    @if (isset($isWhite))
                        <span style="color: white">
                            SWITZ
                        </span>
                    @else
                        <span>
                            SWITZ
                        </span>
                    @endif
                    <img class="switz-logo" src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
                </div>
            </a>
            <button class="navbar-togglers" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-lg-none">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link">Login</a>
                    <a class="nav-link" href="#">Register</a>
                    <a class="nav-link" href="#">My List</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- login dropdown --}}
    @if (isset($user))
        <div class="dropdown">
            <i class="bi bi-person-circle dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" style="cursor: pointer;"></i>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" class="p-5">
                <li>Welcome {{ $user->username }}</li>
                <li style="cursor: pointer;">Profile</li>
                <li class="j-logout" style="cursor: pointer;">Logout</li>
            </ul>
        </div>
    @else
        <div class="dropdown rounded-0 p-2">
            <i class="bi bi-person-circle dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" style="cursor: pointer;"></i>
            <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton1">
                <span class="dropdown-menu-arrow"></span>
                <li data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor: pointer;"><span class="input-group-text bi bi-person p-0 mx-auto jspan-icons-dropdown"
                    id="basic-addon1">Login</span></li>
                <li {{--href="{{route('/register')}}"--}} style="cursor: pointer;">Register</li>
            </ul>
        </div>
    @endif
</div>
