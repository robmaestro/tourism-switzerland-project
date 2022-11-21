@php
    $users = Auth::user();
@endphp
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-container">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="r-title-main">
                    <span>
                        SWITZ
                    </span>
                    <img class="switz-logo" src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
                </div>
            </a>
            <button class="navbar-togglers" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    <a class="nav-link" href="#">Register</a>
                    <a class="nav-link" href="#">My List</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- login dropdown --}}
    @if (isset($users))
        <div class="dropdown">
            <i class="bi bi-person-circle dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown"></i>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li></li>
                <li>Profile</li>
                <li class="j-logout">Logout</li>
            </ul>
        </div>
    @else
        <div class="dropdown">
            <i class="bi bi-person-circle dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown"></i>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li></li>
                <li>Sign up</li>
            </ul>
        </div>
    @endif
</div>
