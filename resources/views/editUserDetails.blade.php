@extends('master')

@section('title', 'User Details')
@section('class', 'e-container')
@section('content')





<div class="e-centent">
    <div class="col-lg-12 e-first">
 <div>
      <div class="e-name"><h1>Firstname </h1></div>   
        <img src="https://avatars3.githubusercontent.com/u/771703?v=4" class="e-user-dp" alt="profile">
    </div>
    </div>
    <div class="e-second">
        <div class="row">
            <div class="col-lg-4 e-col1">
                
                <button class=" btn btn-dark e-btnUpload">UPLOAD PHOTO</button>
            </div>
            <div class="col-lg-8 ">


                <form>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label for="fname" class="form-label label">First Name:</label> <br>
                            <input type="text" value="Ella" class=" mb-2 e-details" id="fname" name="fname"
                                readonly>
                        </div>
                        <div class="col-lg-6"> 
                            <label for="lname" class="form-label label">Last Name:</label> <br>
                            <input type="text" class=" mb-2 e-details " name="lname" readonly> 
    
                        </div>

                        <div class="col-lg-6">
                            <label for="nationality" class="form-label label">Gender:</label> <br>
                            <input type="text" class=" mb-2 e-details" id="gender" name="gender" readonly>
                        </div>
                        <div class="col-lg-6">

                       
                        <label for="nationality" class="form-label label">Nationality:</label> <br>
                        <input type="text" class="mb-2  e-details" id="nationality" name="nationality" readonly>
                        </div>
                        <div class="col-lg-12">
                            <label for="email" class="form-label label">Email Address:</label> <br>
                            <input type="text" class=" mb-2 e-detail1" id="email" name="email" >
                        </div>
                        
                        
                       

                    </div>
                    <hr>
                    <div >
                        <h6>CHANGE PASSWORD </h6>
                        <div class="col-lg-12">
                            <label for="newpass" class="form-label label">Create new password:</label>  <br>
                        <input type="text" class=" e-detail1 mb-3" id="newpass" name="password">
                        </div>
                        <div class="col-lg-12">
                    
                        <label for="confirmpass" class="form-label label">Confirm password:</label> <br>
                        <input type="text" class=" e-detail1  " id="confirmpass" name="password">  
                    </div>
                    </div>
                </form>
                <button type="submit" class="btn btn-dark  e-btnEdit mr-5">SAVE</button>
                <a href={{ 'userDetails' }}> <button type="button" class="btn btn-dark  mx-2 e-btnEdit">CLOSE</button></a>

            </div>
        </div>

    </div>
</div>

@endsection
