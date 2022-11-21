@extends('master')

@section('title', 'User Details')
@section('class', 'e-container')
@section('content')





    <div class="col-lg-12 e-first">
 <div>
   <div class=" e-name" ><h1>Firstname </h1></div>  
        <img src="https://avatars3.githubusercontent.com/u/771703?v=4" class="e-user-dp" alt="profile">
    </div>
    </div>
    <div class="e-userDetails">
        <div class="row">
            <div class="col-lg-4 e-col1">
                
                
            </div>
            <div class="col-lg-8 e-col2">
            

                <form>
                 
                    <div class="my-5">
                        <h3>username</h3>
                        <div class="row col-lg-12">
                            <div class="col-lg-6">
                                <label for="fname" class="form-label label">First Name:</label> <br>
                                <input type="text" value="ella" class=" mb-2 e-details" id="fname" name="fname"
                                    readonly>
                            </div>
                            <div class="col-lg-6">
                                <label for="lname" class="form-label label">Last Name:</label> <br>
                                <input type="text" class="e-details mb-2" name="lname" readonly> 
        
                            </div>
    
                            <div class="col-lg-6">
                                <label for="gender" class="form-label label">Gender:</label> <br>
                                <input type="text" class=" mb-2 e-details" id="gender" name="gender" readonly>
        
                            </div>
                            <div class="col-lg-6">
    
                           
                            <label for="nationality" class="form-label label">Nationality:</label> <br>
                            <input type="text" class=" mb-2 e-details" id="nationality" name="nationality" readonly>
                            </div>
                            <div class="col-lg-12">
                                <label for="email" class="form-label label">Email Address:</label> <br>
                                <input type="text" class=" mb-2 e-detail1" id="email" name="email" >
                            </div>
                            
                     
                </form>
           <div class="e-btn">
                <a href={{ 'editUserDetails' }}> <button type="button" class="btn btn-dark  mr-5 e-btnEdit">EDIT</button></a>
            </div>
            </div>
        </div>

    </div>


@endsection
