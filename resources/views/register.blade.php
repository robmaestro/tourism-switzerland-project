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
                                    <select class="form-select rounded-0 jdropdown" aria-label="Default select example"
                                        name="nationality" id="selectNationality">
                                        <option selected disabled hidden class="joption">Gender</option>
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
                            <input type="email" class="form-control rounded-0 jinput" aria-label="Username"
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
            return `<option value="${nationality}">${nationality}</option>`
        })
        document.getElementById("selectNationality").innerHTML = options
    </script>
@endsection
