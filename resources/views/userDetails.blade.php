@extends('master')

@section('title', 'User Details')
@section('class', 'e-container')
@section('content')

@php
    $user = $users;
    
@endphp

@foreach ($users as $user)

    <div class="e-first">
 <div>
   {{-- <div class=" e-name" ><h1>PROFILE </h1></div>  
         --}}
    </div>
    </div>
    <div class="e-userDetails">
        <div class="row">
            <div class="col-lg-4 e-col1">
                <div class="col-lg-12">
                    <img src="https://th.bing.com/th/id/OIP.O9r-lPDK9sUk-ZzJbojz1AAAAA?pid=ImgDet&w=204&h=204&rs=1" class="e-user-dp" alt="profile">
                   
                </div>
                <div class="mt-2" >
                    <h3 style="color: black">{{ $user->username}}</h3>
                </div>
            </div>
            <div class="col-lg-8 e-col2">
           

                <form>
                    @csrf

                    <div class="my-5">
                      
              
                        <div class="row col-lg-12">
                            <div class="col-lg-6">
                                <label for="fname" class="form-label label">First Name:</label> <br>
                                <input type="text" value={{$user->fname }} class=" mb-2 e-details" id="fname" name="fname"
                                    readonly>
                            </div>
                            <div class="col-lg-6">
                                <label for="lname" class="form-label label">Last Name:</label> <br>
                                <input type="text" value={{$user->lname }} class="e-details mb-2" name="lname" readonly> 
        
                            </div>
    
                            <div class="col-lg-6">
                                <label for="gender" class="form-label label">Gender:</label> <br>
                                <input type="text" value={{$user->gender }} class=" mb-2 e-details" id="gender" name="gender" readonly>
        
                            </div>
                            <div class="col-lg-6">
                            <label for="nationality" class="form-label label">Nationality:</label> <br>
                            <input type="text" value={{$user->nationality }} class=" mb-2 e-details" id="nationality" name="nationality" readonly>
                            </div>
                            
                            <div class="col-lg-12">
                                <label for="email" class="form-label label">Email Address:</label> <br>
                                <input type="text" value={{$user->email }} class=" mb-2 e-detail1" id="email" name="email" >
                            </div>
                            
                     
              
                <div class="e-button">
                <a href={{ 'editUserDetails' }}> <button type="button" class="btn btn-dark  mr-5 e-btnEdit">EDIT</button></a>
            </div>
        </form>
        @endforeach
            </div>
        </div>

    </div>


@endsection
