@extends('master')
@section('title', 'Register')
@section('class', 'jbody-bg')

@section('content')
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-evenly py-md-5 j-container">
            <div class="pe-md-5 py-3 pb-md-0 j">
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
                    <h1 class="my-auto text-center"><i class="bi bi-person-fill me-1"></i>Registration</h1>
                    <i class="bi bi-arrow-left-circle my-auto" style="font-size: 30px;"></i>
                </div>
                <hr>
                <div class="py-4 px-md-5 j-container">
                    <form method="POST" action="/register">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="border-bottom: 1px solid white">
                                        <span class="input-group-text bi bi-person p-0 mx-auto jspan-icons"
                                            id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control rounded-0 jinput" aria-label="First Name"
                                        name="fname" placeholder="First Name" aria-describedby="basic-addon1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="border-bottom: 1px solid white">
                                        <span class="input-group-text bi bi-person p-0 mx-auto jspan-icons"
                                            id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control rounded-0 jinput" aria-label="Last Name"
                                        name="lname" placeholder="Last Name" aria-describedby="basic-addon1" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="border-bottom: 1px solid white">
                                        <span class="input-group-text bi bi-gender-ambiguous p-0 mx-auto jspan-icons"
                                            id="basic-addon1"></span>
                                    </div>
                                    <select class="form-select rounded-0 jdropdown" aria-label="Default select example"
                                        name="gender">
                                        <option selected disabled hidden class="joption">Gender</option>
                                        <option class="joption" value="Male">Male</option>
                                        <option class="joption" value="Female">Female</option>
                                        <option class="joption" value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="border-bottom: 1px solid white">
                                        <span class="input-group-text bi bi-flag p-0 mx-auto jspan-icons"
                                            id="basic-addon1"></span>
                                    </div>
                                    <select class="form-select rounded-0 jdropdown pe-0" aria-label="Default select example"
                                        name="nationality" id="selectNationality">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="border-bottom: 1px solid white">
                                <span class="input-group-text bi bi-person p-0 mx-auto jspan-icons"
                                    id="basic-addon1"></span>
                            </div>
                            <input type="text" class="form-control rounded-0 jinput" aria-label="Username"
                                placeholder="Username" name="username" aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="border-bottom: 1px solid white">
                                <span class="input-group-text bi bi-key p-0 mx-auto jspan-icons" id="basic-addon1"></span>
                            </div>
                            <input type="password" class="form-control rounded-0 jinput" aria-label="Password"
                                placeholder="Password" name="password" aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="border-bottom: 1px solid white">
                                <span class="input-group-text bi bi-envelope p-0 mx-auto jspan-icons"
                                    id="basic-addon1"></span>
                            </div>
                            <input type="email" class="form-control rounded-0 jinput" aria-label="Email"
                                placeholder="Email" name="email" aria-describedby="basic-addon1" />
                        </div>
                        <button type="submit" class="btn btn-md rounded-0 btn-dark jregister-button">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="row modal-dialog-centered">
            <div class="d-none d-md-block col-md-2"></div>
            <div class="container-fluid  d-none d-md-block col-md-4" style="background-color: transparent;">
                <div class="modal-dialog modal-md me-0">
                    <div class="modal-content rounded-0"
                        style="background-image: url('https://images.unsplash.com/photo-1508166093217-f35d00c95fca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80'); background-size: cover; width:100%; height: 450px;">
                    </div>
                </div>
            </div>
            <div class="container-fluid col-md-4" style="background-color: transparent;">
                <div class="modal-dialog p-5 p-md-0 modal-md ms-md-0">
                    <div class="modal-content rounded-0" style="height: 450px; width: 100%;">
                        <div class="modal-header" style="border-bottom: none;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="jlogin-title justify-content-center">
                                <span class="my-auto" style="font-weight: 800; font-size: 30px;">SWITZ</span>
                                <img class="switz-logo"
                                    src="https://cdn.britannica.com/43/4543-004-C0D5C6F4/Flag-Switzerland.jpg">
                            </div>
                            <div class="container_fluid">
                                <form method="POST" action="/login" class="pt-3 ps-md-5">
                                    @csrf
                                    <div class="text-center">
                                        <div class="form__group field">
                                            <input type="input" required="" placeholder="Name" name="username"
                                                class="form__field">
                                            <label class="form__label" for="name">Username</label>
                                            @error('username')
                                                <span class="text-danger">{{ $error }}</span>
                                            @enderror
                                        </div>
                                        <div class="form__group field">
                                            <input type="password" required="" placeholder="Name" name="password"
                                                class="form__field">
                                            <label class="form__label" for="name">Password</label>
                                        </div>
                                    </div>
                                    <div class="cntr pt-2">
                                        <input checked="" type="checkbox" id="cbx" class="hidden-xs-up">
                                        <label for="cbx" class="cbx"></label>
                                        <label>Remember</label>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-md rounded-0 btn-dark jregister-button mt-4">Login</button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <label>New to Switz?</label>
                            <button type="submit" class="btn btn-md rounded-0 btn-dark jregister-button"
                                onclick="window.location='{{ url('/register') }}'">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-2"></div>
        </div>
    </div>
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
        document.getElementById("selectNationality").innerHTML = options
    </script>
@endsection
