@extends('master')

@section('title', 'User Details')
@section('class', 'e-container')
@section('content')




    {{-- <div class="row e-1stRow ">
        <div class="e-head">
            <span class="h1">EDIT PROFILE</span>
           
        </div>
        <div class="e-1stCol col-lg-4">

            <div >
                <img src="https://cdn.picpng.com/person/person-individually-alone-icon-49284.png" class="e-user-profile" alt="profile">
            </div>
            <button type="button" class="btn btn-secondary my-2">UPLOAD PHOTO</button>

          
           

        </div>
        <div class="e-2ndCol col-lg-8">   

            <form>
                <div class="mb-2">
                    <label for="fname" class="form-label label">First Name:</label><br>
                    <input type="text" class="e-editUserdetail" name="fname" > <br>
                    
                    <label for="lname" class="form-label label">Last Name:</label><br>
                    <input type="text" class="e-editUserdetail" name="lname" > <br>
                    
                    <label for="gender" class="form-label label">Gender:</label><br>
                    <input type="text" class="  e-editUserdetail" id="gender" name="gender"  ><br>
                   
                    {{-- <select name="gender" id="gender" class="e-editUserdetail">
                        <option value="">---</option>
                        <option value="">FEMALE</option>
                        <option value="">MALE</option>
                    </select><br> 
                    <label for="nationality" class="form-label label">Nationality:</label><br>
                    <input type="text" class="  e-editUserdetail" id="nationality" name="nationality"  ><br>
                  
                    <label for="email" class="form-label label">Email Address:</label><br>
                    <input type="text" class="  e-editUserdetail" id="email" name="email"  ><br>
                </div>
                <hr>
                <div class="mb-2">
                    <h6>CHANGE PASSWORD (optional)</h6>
                    
                    <label for="newpass" class="form-label label">Create new password:</label> <br>
                    <input type="text" class=" e-editUserdetail" id="newpass" name="password" aria-describedby="emailHelp" > <br>
                    
                    <label for="confirmpass" class="form-label label">Confirm new password:</label> <br>
                    <input type="text" class=" e-editUserdetail" id="confirmpass" name="password" aria-describedby="emailHelp" > <br>
           
                  </div>     
              </form>
            
        </div>
     
    </div> --}}
<div class="e-centent">
    <div class="col-lg-12 e-first">
 <div>
    <div class="d-flex justify-content-center e-name"><h1>Firstname </h1></div> 
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
                        <input type="text" class=" mb-2 e-userdetail" id="email" name="email" >
                         <img src="https://cdn4.iconfinder.com/data/icons/software-menu-icons/256/SoftwareIcons-68-512.png" class="e-icon" alt=""><br> 
                        
                       

                    </div>
                    <hr>
                    <div class="mb-5">
                        <h6>CHANGE PASSWORD (optional)</h6>

                        <label for="newpass" class="form-label label">Create new password:</label> 
                        <input type="text" class=" e-changepass mb-3" id="newpass" name="password"
                            > <br>

                        <label for="confirmpass" class="form-label label">Confirm password:   </label> 
                        <input type="text" class=" e-changepass2  " id="confirmpass" name="password">  <br>

                    </div>
                </form>
                <button type="submit" class="btn btn-dark  e-btnEdit mr-5">SAVE</button>
                <a href={{ 'userDetails' }}> <button type="button" class="btn btn-dark  mx-2 e-btnEdit">CLOSE</button></a>

            </div>
        </div>

    </div>
</div>

@endsection
