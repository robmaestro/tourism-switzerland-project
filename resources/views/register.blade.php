@extends('master')

@section('title', 'Login')
@section('class', 'jbody-bg')
@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-evenly py-md-5" style="color: white">
        <div class="pe-md-5 pt-3">
            <h1>Sign up now!</h1>
            <hr>
            <p>Jobs fill your personal account, but adventures fill your soul. Let's go on an adventure and see some
                spectacular landscapes. Jobs fill your personal account, but adventures fill your soul. Let's go on an
                adventure and see some spectacular landscapes. Jobs fill your personal account, but adventures fill your
                soul. Let's go on an adventure and see some spectacular landscapes.</p>
            <button type="button" class="btn btn-outline-light mt-3 rounded-0">Learn More</button>
        </div>
        <div class="jcontainer-signup my-auto p-3" style="background-color: rgba(210, 222, 228, 0.1);">
            <div class="d-flex flex-row text-start justify-content-between">
                <h1 class="my-auto text-center"><i class="bi bi-person-fill"></i>Registration</h1>
                <i class="bi bi-arrow-left-circle my-auto" style="font-size: 30px;"></i>
            </div>
            <hr>
            <div class="py-4 px-md-5">
                <form method="POST" action="/register">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend my-auto">
                                    <span class="input-group-text bi bi-person p-0 me-2" id="basic-addon1"
                                        style="font-size: 30px; background:none; border:0; color: white;"></span>
                                </div>
                                <input type="text" class="form-control rounded-0" aria-label="First Name" name="fname"
                                    placeholder="First Name" aria-describedby="basic-addon1"
                                    style="background:none; border:0; color: white; box-shadow: none; border-bottom: 1px solid white ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" aria-label="Last Name" name="lname"
                                    placeholder="Last Name" aria-describedby="basic-addon1"
                                    style="background:none; border:0; color: white; box-shadow: none; border-bottom: 1px solid white">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend my-auto">
                                    <span class="input-group-text bi bi-gender-ambiguous p-0 me-2" id="basic-addon1"
                                        style="font-size: 30px; background:none; border:0; color: white;"></span>
                                </div>
                                <select class="form-select rounded-0" aria-label="Default select example" name="gender"
                                    style="background:none; border:0; color: white; box-shadow: none; border-bottom: 1px solid white">
                                    <option selected disabled hidden style="color: black">Gender</option>
                                    <option value="Male" style="color: black">Male</option>
                                    <option value="Female" style="color: black">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend my-auto">
                                    <span class="input-group-text bi bi-flag p-0 me-2" id="basic-addon1"
                                        style="font-size: 30px; background:none; border:0; color: white;"></span>
                                </div>
                                <input type="text" class="form-control rounded-0" aria-label="Nationality"
                                    name="nationality" placeholder="Nationality" aria-describedby="basic-addon1"
                                    style="background:none; border:0; color: white; box-shadow: none; border-bottom: 1px solid white">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend my-auto">
                            <span class="input-group-text bi bi-person p-0 me-2" id="basic-addon1"
                                style="font-size: 30px; background:none; border:0; color: white;"></span>
                        </div>
                        <input type="text" class="form-control rounded-0" aria-label="Username" placeholder="Username"
                            name="username" aria-describedby="basic-addon1"
                            style="background:none; border:0; color: white; box-shadow: none; border-bottom: 1px solid white">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend my-auto">
                            <span class="input-group-text bi bi-key p-0 me-2" id="basic-addon1"
                                style="font-size: 30px; background:none; border:0; color: white;"></span>
                        </div>
                        <input type="password" class="form-control rounded-0" aria-label="Password" placeholder="Password"
                            name="password" aria-describedby="basic-addon1"
                            style="background:none; border:0; color: white; box-shadow: none; border-bottom: 1px solid white">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend my-auto">
                            <span class="input-group-text bi bi-envelope p-0 me-2" id="basic-addon1"
                                style="font-size: 30px; background:none; border:0; color: white;"></span>
                        </div>
                        <input type="email" class="form-control rounded-0" aria-label="Username" placeholder="Email" name="email"
                            aria-describedby="basic-addon1"
                            style="background:none; border:0; color: white; box-shadow: none; border-bottom: 1px solid white">
                    </div>
                    <button type="submit" class="btn btn-md rounded-0 btn-dark jregister-button">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
