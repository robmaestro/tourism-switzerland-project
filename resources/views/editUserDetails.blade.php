@extends('master')

@section('title', 'User Details')
@section('class', 'e-container')
@section('content')



    @foreach ($users as $user)
        <div>
            <div class=" e-first">
                <div>
                    {{-- <div class="e-name">
                        <h1>EDIT PROFILE</h1>
                    </div> --}}

                </div>
            </div>
            <form action="userDetails" method="POST">
                @csrf
                <div class="e-second">
                    <div class="row">
                        <div class="col-lg-4 e-col1">
                            <div class="col-lg-12">
                                <img src="https://th.bing.com/th/id/OIP.O9r-lPDK9sUk-ZzJbojz1AAAAA?pid=ImgDet&w=204&h=204&rs=1"
                                    class="e-user-dp" alt="profile">
                            </div>
                            <div class="mt-2">
                                <input type="text" name="username" id="e-username" class="h3"
                                    value={{ $user->username }}><span class="bi bi-pencil-square e-pencil"></span>

                            </div>
                        </div>
                        <div class="col-lg-8 e-col2">

                            <div class="row mt-5">

                                <div class="col-lg-6">
                                    <label for="fname" class="form-label label"></span>First Name:</label> <br>
                                    <input type="text" class=" mb-2 e-details" value={{ $user->fname }} id="fname"
                                        name="fname" readonly>
                                </div>
                                <div class="col-lg-6">
                                    <label for="lname" class="form-label label">Last Name:</label> <br>
                                    <input type="text" class=" mb-2 e-details " value={{ $user->lname }} name="lname"
                                        readonly>

                                </div>

                                <div class="col-lg-6">
                                    <label for="nationality" class="form-label label">Gender:</label> <br>
                                    <input type="text" class=" mb-2 e-details" value={{ $user->gender }} id="gender"
                                        name="gender" readonly>
                                </div>
                                <div class="col-lg-6">


                                    <label for="nationality" class="form-label label">Nationality:</label> <br>
                                    <input type="text" class="mb-2 e-details" id="nationality"
                                        value={{ $user->nationality }} name="nationality" readonly>
                                </div>
                                <div class="col-lg-12">
                                    <label for="email" class="form-label label">Email Address:</label> <br>
                                    <input type="text" value={{ $user->email }} class=" mb-2 e-detail1" id="email"
                                        name="email"><span class="bi bi-pencil e-pencil"></span>
                                </div>




                            </div>
                            <hr>
                            <div>
                                <h6>CHANGE PASSWORD </h6>
                                <div class="col-lg-12">
                                    <label for="newpass" class="form-label label">Create new password:</label> <br>
                                    <input type="password" class=" e-detail1 mb-3" id="newpass" name="password"> <span
                                        class="bi bi-pencil e-pencil"></span>
                                </div>
                                <div class="col-lg-12">

                                    <label for="confirmpass" class="form-label label">Confirm password:</label> <br>
                                    <input type="text" class=" e-detail1" id="confirmpass" name="passwordconfirm"><span
                                        class="bi bi-pencil e-pencil"></span>
                                </div>
                            </div>
                            <div class="e-button">

                                <a href={{ 'userDetails' }}> <button type="button"
                                        class="btn btn-dark  mx-2 e-btnEdit">CLOSE</button></a>
                                <button type="submit" class="btn btn-dark  e-btnEdit mr-5">SAVE</button>
                            </div>
            </form>
    @endforeach
    </div>
    </div>

    </div>
    </div>

@endsection
