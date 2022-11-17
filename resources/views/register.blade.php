@extends('master')

@section('title', 'Login')
@section('class', 'jbody-bg')
@section('content')
    <div class="d-flex flex-row justify-content-center image-fluid py-md-5">
        <div class="jcontainer-signup my-auto p-3">
            <i class="bi bi-arrow-left-circle text-end" style="font-size: 30px;"></i>
            <h1 class="py-4">REGISTRATION</h1>
            <form method="POST" action="/register">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputFname" name="fname"
                        placeholder="First Name">
                    <label for="floatingInputFname">First Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputLname" name="lname"
                        placeholder="Last Name">
                    <label for="floatingInputLname">Last Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputUsername" name="username"
                        placeholder="Username">
                    <label for="floatingInputUsername">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInputEmail" name="email" placeholder="Email">
                    <label for="floatingInputEmail">Email</label>
                </div>
                <button type="submit" class="btn btn-md  btn-dark">SIGN UP</button>
            </form>
        </div>
    </div>
@endsection
