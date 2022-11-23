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
                                        aria-label="Last Name" name="fname" value={{ $user->fname }} readonly />

                                </div>

                                <div class="col-lg-6">
                                    <label for="lname" class="form-label label e-user-content">Last Name:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="lname" value={{ $user->lname }} readonly />

                                </div>

                                <div class="col-lg-6">
                                    <label for="nationality" class="form-label label e-user-content">Gender:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="gender" value={{ $user->gender }} readonly />

                                </div>

                                <div class="col-lg-6">
                                    <label for="nationality" class="form-label label e-user-content">Nationality:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="nationality" value={{ $user->nationality }} readonly />
                                </div>

                                <div class="col-lg-12">
                                    <label for="email" class="form-label label e-user-content">Email Address:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="email" value={{ $user->email }} readonly />
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
                            </div>
                        </div>

                        <div class="col-lg-8 e-col2">
                            <div class="row mt-5">

                                <div class="col-lg-6">
                                    <label for="fname" class="form-label label e-user-content"></span>First Name:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="fname" value={{ $user->fname }}
                                        aria-describedby="basic-addon1" />
                                </div>

                                <div class="col-lg-6">
                                    <label for="lname" class="form-label label e-user-content">Last Name:</label> <br>
                                    <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                        aria-label="Last Name" name="lname" value={{ $user->lname }}
                                        aria-describedby="basic-addon1" />
                                </div>

                                <div class="col-lg-6">
                                    <label class="form-label label e-user-content">Gender:</label> <br>
                                    <select class="form-select rounded-0  e-details ps-0" name="gender">
                                        <option class="e-option" value={{ $user->gender }}>{{ $user->gender }}</option>
                                        <option class="e-option" value="Male">Male</option>
                                        <option class="e-option" value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="nationality" class="form-label label e-user-content">Nationality:</label> <br>
                                    <select class="form-select rounded-0 e-details ps-0"
                                        aria-label="Default select example" name="nationality" id="selectNationality">
                                        <option selected disabled hidden class="e-option">{{ $user->nationality }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label for="email" class="form-label label e-user-content">Email Address:</label> <br>
                                <input type="text" class="form-control rounded-0 e-details ps-0 e-user-content"
                                    aria-label="Last Name" name="email" value={{ $user->email }}
                                    aria-describedby="basic-addon1" />
                            </div>

                            <div class="e-button">
                                <button type="button" class="btn btn-dark rounded-0  e-btnEdit"
                                    onclick="btnclose()">CLOSE</button>
                                <button type="submit" class="btn btn-dark e-btnEdit rounded-0 e-btnSave">SAVE</button>
                                
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
            'afghan',
            'albanian',
            'algerian',
            'american',
            'andorran',
            'angolan',
            'antiguans',
            'argentinean',
            'armenian',
            'australian',
            'austrian',
            'azerbaijani',
            'bahamian',
            'bahraini',
            'bangladeshi',
            'barbadian',
            'barbudans',
            'batswana',
            'belarusian',
            'belgian',
            'belizean',
            'beninese',
            'bhutanese',
            'bolivian',
            'bosnian',
            'brazilian',
            'british',
            'bruneian',
            'bulgarian',
            'burkinabe',
            'burmese',
            'burundian',
            'cambodian',
            'cameroonian',
            'canadian',
            'cape verdean',
            'central african',
            'chadian',
            'chilean',
            'chinese',
            'colombian',
            'comoran',
            'congolese',
            'costa rican',
            'croatian',
            'cuban',
            'cypriot',
            'czech',
            'danish',
            'djibouti',
            'dominican',
            'dutch',
            'east timorese',
            'ecuadorean',
            'egyptian',
            'emirian',
            'equatorial guinean',
            'eritrean',
            'estonian',
            'ethiopian',
            'fijian',
            'filipino',
            'finnish',
            'french',
            'gabonese',
            'gambian',
            'georgian',
            'german',
            'ghanaian',
            'greek',
            'grenadian',
            'guatemalan',
            'guinea-bissauan',
            'guinean',
            'guyanese',
            'haitian',
            'herzegovinian',
            'honduran',
            'hungarian',
            'icelander',
            'indian',
            'indonesian',
            'iranian',
            'iraqi',
            'irish',
            'israeli',
            'italian',
            'ivorian',
            'jamaican',
            'japanese',
            'jordanian',
            'kazakhstani',
            'kenyan',
            'kittian and nevisian',
            'kuwaiti',
            'kyrgyz',
            'laotian',
            'latvian',
            'lebanese',
            'liberian',
            'libyan',
            'liechtensteiner',
            'lithuanian',
            'luxembourger',
            'macedonian',
            'malagasy',
            'malawian',
            'malaysian',
            'maldivan',
            'malian',
            'maltese',
            'marshallese',
            'mauritanian',
            'mauritian',
            'mexican',
            'micronesian',
            'moldovan',
            'monacan',
            'mongolian',
            'moroccan',
            'mosotho',
            'motswana',
            'mozambican',
            'namibian',
            'nauruan',
            'nepalese',
            'new zealander',
            'ni-vanuatu',
            'nicaraguan',
            'nigerien',
            'north korean',
            'northern irish',
            'norwegian',
            'omani',
            'pakistani',
            'palauan',
            'panamanian',
            'papua new guinean',
            'paraguayan',
            'peruvian',
            'polish',
            'portuguese',
            'qatari',
            'romanian',
            'russian',
            'rwandan',
            'saint lucian',
            'salvadoran',
            'samoan',
            'san marinese',
            'sao tomean',
            'saudi',
            'scottish',
            'senegalese',
            'serbian',
            'seychellois',
            'sierra leonean',
            'singaporean',
            'slovakian',
            'slovenian',
            'solomon islander',
            'somali',
            'south african',
            'south korean',
            'spanish',
            'sri lankan',
            'sudanese',
            'surinamer',
            'swazi',
            'swedish',
            'swiss',
            'syrian',
            'taiwanese',
            'tajik',
            'tanzanian',
            'thai',
            'togolese',
            'tongan',
            'trinidadian or tobagonian',
            'tunisian',
            'turkish',
            'tuvaluan',
            'ugandan',
            'ukrainian',
            'uruguayan',
            'uzbekistani',
            'venezuelan',
            'vietnamese',
            'welsh',
            'yemenite',
            'zambian',
            'zimbabwean',
        ]

        var options = nationalityList.map(nationality => {
            return `<option class="joption" value="${nationality}">${nationality}</option>`
        })
        document.getElementById("selectNationality").innerHTML = options



        $('.e-btnSave').on('click', function() {
            
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Saved Successfully!',
                showConfirmButton: false,
                timer: 2000
            })
            }).then((result) => {
                
                        $.ajax({
                            type: "POST",
                            url: '/profile',
                            data: {
                                logout: true
                            },
                            success: function(response) {
                                window.location.href = "/profile";
                            }
                        })
                }
            )
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
