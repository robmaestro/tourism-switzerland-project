@extends('master')

@section('title', 'User Details')
@section('class', 'e-container')
@section('content')





    <div class="col-lg-12 e-first">
 <div>
  <div class="d-flex justify-content-center e-name"><h1>Firstname </h1></div> 
        <img src="https://avatars3.githubusercontent.com/u/771703?v=4" class="e-user-dp" alt="profile">
    </div>
    </div>
    <div class="e-userDetails">
        <div class="row">
            <div class="col-lg-4 e-col1">
                
                <button class=" btn btn-dark e-btnUpload">UPLOAD PHOTO</button>
            </div>
            <div class="col-lg-8 e-col2">


                <form>
                    <div class="my-5">
                        <label for="fname" class="form-label label">First Name:</label><br>
                        <input type="text" value="Ella" class=" mb-2 e-userdetail" id="fname" name="fname"
                            readonly><br>

                        <label for="lname" class="form-label label">Last Name:</label><br>
                        <input type="text" class="e-userdetail mb-2" name="lname" readonly> <br>

                        <label for="gender" class="form-label label">Gender:</label><br>
                        <input type="text" class=" mb-2 e-userdetail" id="gender" name="gender" readonly><br>

                        <label for="nationality" class="form-label label">Nationality:</label><br>
                        <input type="text" class=" mb-2 e-userdetail" id="nationality" name="nationality" readonly><br>

                        <label for="email" class="form-label label">Email Address:</label><br>
                        <input type="text" class=" mb-2 e-userdetail" id="email" name="email" readonly><br> 
                        
                       

                    </div>
                    
                </form>
           
                <a href={{ 'editUserDetails' }}> <button type="button" class="btn btn-dark  mr-5 e-btnEdit">EDIT</button></a>

            </div>
        </div>

    </div>


@endsection
