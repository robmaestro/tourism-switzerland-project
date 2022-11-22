@extends('master')
@section('title', 'Register')
@section('class', 'jbody-bg')

@section('content')
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-evenly py-md-5" style="color: white">
            <div class="pe-md-5 py-3 pb-md-0">
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
                <div class="py-4 px-md-5">
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
                                        name="nationality" id="selectNationality" >
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
@endsection

@section('script')
    <script>
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
