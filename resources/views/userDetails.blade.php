@extends('master')
@section('title', 'User Details')
@section('class', 'jbody-bg')
@section('content')

    @foreach ($users as $user)
        <div id="e-userDetails">

            <div class="e-first">
                <div>
                    <h2 class="mb-0"> <span class="bi bi-person"> </span> PROFILE</h2>
                </div>
            </div>
            <div class="e-second">
                <div class="row">
                    <div class="col-lg-4 e-col1">

                        <div class=" d-flex justify-content-center">
                            <div class="col-lg-12  d-flex align-items-center justify-content-center">
                                <img src="https://ui-avatars.com/api/?name={{ $user->fname }}+{{ $user->lname }}&background=random"
                                    class="img-profile rounded-circle" alt="User Image" width="150" height="150">
                            </div>
                        </div>
                        <div class="mt-2 d-flex justify-content-center">
                            <input type="text" name="username" id="e-username" class="form-control rounded-0 e-detail1"
                                value={{ $user->username }} readonly>
                        </div>
                    </div>
                    <div class="col-lg-8 e-col2 e-user-content">
                       
                            <div class="row mt-5 e-user-content">

                                <div class="col-lg-6">
                                    <label for="fname" class="form-label label e-user-content ">First Name:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="fname" value="{{ $user->fname }}" readonly />

                                </div>

                                <div class="col-lg-6">
                                    <label for="lname" class="form-label label e-user-content">Last Name:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="lname" value="{{ $user->lname }} " readonly />

                                </div>

                                <div class="col-lg-6">
                                    <label for="nationality" class="form-label label e-user-content">Gender:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="gender" value="{{ $user->gender }}" readonly />

                                </div>

                                <div class="col-lg-6">
                                    <label for="nationality" class="form-label label e-user-content">Nationality:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="nationality" value="{{ $user->nationality }}" readonly />
                                </div>

                                <div class="col-lg-12">
                                    <label for="email" class="form-label label e-user-content">Email Address:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="email" value="{{ $user->email }}" readonly />
                                </div>

                                <div class="e-button">
                                
                                        <button type="submit" class="btn btn-dark rounded-0  e-btnEdit " onclick="editDetails()">EDIT</button>
                                </div>


                            </div>
                    </div>
                </div>

           
            </div>
        </div>

        {{-- edit page --}}
        <div id="e-editdetails" style="display: none">
            <div class=" e-first">
                <div>
                    <h2 class="mb-0"><span class="bi bi-pencil-square"> </span> EDIT PROFILE</h2>


                </div>
            </div>

            <form action="postProfile" method="POST">
                @csrf
                <div class="e-second">
                    <div class="row">
                        <div class="col-lg-4 e-col1">

                            <div class=" d-flex justify-content-center">
                                <div class="col-lg-12  d-flex align-items-center justify-content-center">
                                    <img src="https://ui-avatars.com/api/?name={{ $user->fname }}+{{ $user->lname }}&background=random"
                                        class="img-profile rounded-circle" alt="User Image" width="150" height="150">
                                </div>
                            </div>

                            <div class="mt-2 d-flex justify-content-center">

                                <input type="text" name="username" id="e-username"
                                    class="form-control rounded-0 e-detail1 ps-0" value={{ $user->username }}> 
                                    <span class="bi bi-pencil e-pencil"></span>
                            </div>
                        </div>

                        <div class="col-lg-8 e-col2">
                            <div class="row mt-5">

                                <div class="col-lg-6">
                                    <label for="fname" class="form-label label e-user-content">First Name:</label> <br>
                                    <div class="d-flex flex-direction:row">
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="fname" value="{{ $user->fname }}"
                                        aria-describedby="basic-addon1" />
                                        <span class="bi bi-pencil e-pencil"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="lname" class="form-label label e-user-content">Last Name:</label> <br>
                                    <div class="d-flex flex-direction:row">
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="lname" value="{{ $user->lname }}"
                                        aria-describedby="basic-addon1" /><span class="bi bi-pencil e-pencil"></span> </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="form-label label e-user-content">Gender:</label> <br>
                                    <div class="d-flex flex-direction:row">
                                    <select class="form-select rounded-0  e-details ps-0" name="gender" >
                                     
                                        <option class="e-option" value="{{ $user->gender }}" selected hidden >{{ $user->gender }}</option>
                                        <option class="e-option" value="Male">Male</option>
                                        <option class="e-option" value="Female">Female</option>
                                        <option class="e-option" value="Others">Others</option>
                                    </select> 
                                    <span class="bi bi-pencil e-pencil"></span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="nationality" class="form-label label e-user-content">Nationality:</label> <br>
                                    <div class="d-flex flex-direction:row">
                                    <select class="form-select rounded-0 e-details ps-0"
                                        aria-label="Default select example" name="nationality" id="selectNationality">
                                       
                        
                                    </select>
                                    <span class="bi bi-pencil e-pencil"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label for="email" class="form-label label e-user-content">Email Address:</label> <br>
                                <div class="d-flex flex-direction:row">
                                <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                    aria-label="Last Name" name="email" value="{{ $user->email }}"
                                    aria-describedby="basic-addon1" />
                                    <span class="bi bi-pencil e-pencil"></span>
                                </div>
                            </div>

                            <div class="e-button">
                                <button type="button" class="btn btn-dark rounded-0  e-btnEdit"
                                    onclick="btnclose()">CLOSE</button>
                                <button type="submit" class="btn btn-dark e-btnEdit rounded-0 e-btnSave" onclick="btnSave()">SAVE</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach

@endsection

@section('script')
    <script>
        $('.j-logout').on('click', function() {
            console.log("clicked")
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            Swal.fire({
                title: 'Do you want to Logout?',
                showCancelButton: true,
                confirmButtonText: 'Logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                            title: 'Logout Successfully!',
                            timer: 3000,
                            icon: 'success',
                            showConfirmButton: false
                        }),
                        $.ajax({
                            type: "POST",
                            url: '/logout',
                            data: {
                                logout: true
                            },
                            success: function(response) {
                                window.location.href = "/";
                            }
                        })
                }
            })
        })

        //save
       
       


        //editDetails

        function editDetails() {
            var editDetail = document.getElementById('e-editdetails');
            var Detail = document.getElementById('e-userDetails');
            Detail.style.display = "none";
            editDetail.style.display = "block";

        }
        //delete
        function deleteUser() {

        }
        //close
        function btnclose() {
            var editDetail = document.getElementById('e-editdetails');
            var Detail = document.getElementById('e-userDetails');
            Detail.style.display = "block";
            editDetail.style.display = "none";

        }

        //nationality
        const nationalityList = [
            'Afghan',
            'Albanian',
            'Algerian',
            'American',
            'Andorran',
            'Angolan',
            'Antiguans',
            'Argentinean',
            'Armenian',
            'Australian',
            'Austrian',
            'Azerbaijani',
            'Aahamian',
            'Bahraini',
            'Bangladeshi',
            'Barbadian',
            'Barbudans',
            'Batswana',
            'Belarusian',
            'Belgian',
            'Belizean',
            'Bninese',
            'Bhutanese',
            'Bolivian',
            'Bosnian',
            'Brazilian',
            'British',
            'Bruneian',
            'Bulgarian',
            'Burkinabe',
            'Burmese',
            'Burundian',
            'Cambodian',
            'Cameroonian',
            'Canadian',
            'Cape verdean',
            'Central african',
            'Chadian',
            'Chilean',
            'Chinese',
            'Colombian',
            'Comoran',
            'Congolese',
            'Costa rican',
            'Croatian',
            'Cuban',
            'Cypriot',
            'Czech',
            'Danish',
            'Djibouti',
            'Dominican',
            'Dutch',
            'East timorese',
            'Ecuadorean',
            'Egyptian',
            'Emirian',
            'Equatorial guinean',
            'Eritrean',
            'Estonian',
            'Ethiopian',
            'Fijian',
            'Filipino',
            'Finnish',
            'French',
            'Gabonese',
            'Gambian',
            'Georgian',
            'German',
            'Ghanaian',
            'Greek',
            'Grenadian',
            'Guatemalan',
            'Guinea-bissauan',
            'Guinean',
            'Guyanese',
            'Gaitian',
            'Gerzegovinian',
            'Gonduran',
            'Gungarian',
            'Icelander',
            'Indian',
            'Indonesian',
            'Iranian',
            'Iraqi',
            'Irish',
            'Israeli',
            'Italian',
            'Ivorian',
            'Jamaican',
            'Japanese',
            'Jordanian',
            'Kazakhstani',
            'Kenyan',
            'Kittian and nevisian',
            'Kuwaiti',
            'Kyrgyz',
            'Laotian',
            'Latvian',
            'Lebanese',
            'Liberian',
            'Libyan',
            'Liechtensteiner',
            'Lithuanian',
            'Luxembourger',
            'Macedonian',
            'Malagasy',
            'Malawian',
            'Malaysian',
            'Maldivan',
            'Malian',
            'Maltese',
            'Marshallese',
            'Mauritanian',
            'Mauritian',
            'Mexican',
            'Micronesian',
            'Moldovan',
            'Monacan',
            'Mongolian',
            'Moroccan',
            'Mosotho',
            'Motswana',
            'Mozambican',
            'Namibian',
            'Nauruan',
            'Nepalese',
            'New zealander',
            'Ni-vanuatu',
            'Nicaraguan',
            'Nigerien',
            'North korean',
            'Northern irish',
            'Norwegian',
            'Omani',
            'Pakistani',
            'Palauan',
            'Panamanian',
            'Papua new guinean',
            'Paraguayan',
            'Peruvian',
            'Polish',
            'Portuguese',
            'Qatari',
            'Romanian',
            'Russian',
            'Rwandan',
            'Saint lucian',
            'Salvadoran',
            'Samoan',
            'San marinese',
            'Sao tomean',
            'Saudi',
            'Scottish',
            'Senegalese',
            'Serbian',
            'Seychellois',
            'Sierra leonean',
            'Singaporean',
            'Slovakian',
            'Slovenian',
            'Solomon islander',
            'Somali',
            'South african',
            'South korean',
            'Spanish',
            'Sri lankan',
            'Sudanese',
            'Surinamer',
            'Swazi',
            'Swedish',
            'Swiss',
            'Syrian',
            'Taiwanese',
            'Tajik',
            'Tanzanian',
            'Thai',
            'Togolese',
            'Tongan',
            'Trinidadian or tobagonian',
            'Tunisian',
            'Turkish',
            'Tuvaluan',
            'Ugandan',
            'Ukrainian',
            'Uruguayan',
            'Uzbekistani',
            'Venezuelan',
            'Vietnamese',
            'Welsh',
            'Yemenite',
            'Zambian',
            'Zimbabwean',
        ]

        var options = nationalityList.map(nationality => {
            
            return `<option class="joption" value="${nationality}">${nationality}</option>`
        })
        var selected = ''
        document.getElementById("selectNationality").innerHTML = options

        function btnSave(){
            
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Saved Successfully!',
                showConfirmButton: false,
                timer: 2000
        })
   
    }

    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
