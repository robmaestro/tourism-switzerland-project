@extends('master')

@section('title', 'Home')
@section('content')
    <div class="mobile-container">
        <div class="d-flex align-items-center flex-column gap-2">
            <div class="r-mobile-title">
                <span class="r-welcome">Welcome to Switzerland!</span>
            </div>
            <div id="banner-images" class="carousel slide" data-bs-ride="true">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://wallpapercave.com/wp/wp6989653.jpg" class="d-block r-image-banner"
                            alt="The Matterhorn" />
                        <div class="r-carousel-caption">
                            <p>The Matterhorn</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.planetware.com/photos-large/CH/switzerland-jungfraujoch-top-of-europe.jpg"
                            class="d-block r-image-banner" alt="Jungfraujoch" />
                        <div class="r-carousel-caption">
                            <p>Jungfraujoch</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.planetware.com/photos-large/CH/switzerland-lucerne.jpg"
                            class="d-block r-image-banner" alt="Lucerne" />
                        <div class="r-carousel-caption">
                            <p>Lucerne</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.wallpaperscraft.com/image/single/switzerland_lake_geneva_city_mountains_snow_69357_1920x1080.jpg"
                            class="d-block r-image-banner" alt="Lake Geneva" />
                        <div class="r-carousel-caption">
                            <p>Lake Geneva</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#banner-images" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#banner-images" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </div>

        <div class="spacer layer1">
            <svg id="visual" viewBox="0 0 768 300" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <path
                    d="M0 210L10.7 209.5C21.3 209 42.7 208 64 210.8C85.3 213.7 106.7 220.3 128 222.5C149.3 224.7 170.7 222.3 192 225.3C213.3 228.3 234.7 236.7 256 234C277.3 231.3 298.7 217.7 320 217.7C341.3 217.7 362.7 231.3 384 236.8C405.3 242.3 426.7 239.7 448 236C469.3 232.3 490.7 227.7 512 221C533.3 214.3 554.7 205.7 576 203.3C597.3 201 618.7 205 640 208C661.3 211 682.7 213 704 211.5C725.3 210 746.7 205 757.3 202.5L768 200L768 301L757.3 301C746.7 301 725.3 301 704 301C682.7 301 661.3 301 640 301C618.7 301 597.3 301 576 301C554.7 301 533.3 301 512 301C490.7 301 469.3 301 448 301C426.7 301 405.3 301 384 301C362.7 301 341.3 301 320 301C298.7 301 277.3 301 256 301C234.7 301 213.3 301 192 301C170.7 301 149.3 301 128 301C106.7 301 85.3 301 64 301C42.7 301 21.3 301 10.7 301L0 301Z"
                    fill="#a7c957"></path>
                <path
                    d="M0 260L10.7 257.2C21.3 254.3 42.7 248.7 64 245.7C85.3 242.7 106.7 242.3 128 238.2C149.3 234 170.7 226 192 223.2C213.3 220.3 234.7 222.7 256 225C277.3 227.3 298.7 229.7 320 232C341.3 234.3 362.7 236.7 384 236.2C405.3 235.7 426.7 232.3 448 229C469.3 225.7 490.7 222.3 512 225.7C533.3 229 554.7 239 576 240.3C597.3 241.7 618.7 234.3 640 229.7C661.3 225 682.7 223 704 224.3C725.3 225.7 746.7 230.3 757.3 232.7L768 235L768 301L757.3 301C746.7 301 725.3 301 704 301C682.7 301 661.3 301 640 301C618.7 301 597.3 301 576 301C554.7 301 533.3 301 512 301C490.7 301 469.3 301 448 301C426.7 301 405.3 301 384 301C362.7 301 341.3 301 320 301C298.7 301 277.3 301 256 301C234.7 301 213.3 301 192 301C170.7 301 149.3 301 128 301C106.7 301 85.3 301 64 301C42.7 301 21.3 301 10.7 301L0 301Z"
                    fill="#91b954"></path>
                <path
                    d="M0 267L10.7 262.5C21.3 258 42.7 249 64 246.3C85.3 243.7 106.7 247.3 128 249.3C149.3 251.3 170.7 251.7 192 254.7C213.3 257.7 234.7 263.3 256 261.8C277.3 260.3 298.7 251.7 320 250.3C341.3 249 362.7 255 384 259C405.3 263 426.7 265 448 265.3C469.3 265.7 490.7 264.3 512 263.3C533.3 262.3 554.7 261.7 576 262.8C597.3 264 618.7 267 640 268C661.3 269 682.7 268 704 263.2C725.3 258.3 746.7 249.7 757.3 245.3L768 241L768 301L757.3 301C746.7 301 725.3 301 704 301C682.7 301 661.3 301 640 301C618.7 301 597.3 301 576 301C554.7 301 533.3 301 512 301C490.7 301 469.3 301 448 301C426.7 301 405.3 301 384 301C362.7 301 341.3 301 320 301C298.7 301 277.3 301 256 301C234.7 301 213.3 301 192 301C170.7 301 149.3 301 128 301C106.7 301 85.3 301 64 301C42.7 301 21.3 301 10.7 301L0 301Z"
                    fill="#7da951"></path>
                <path
                    d="M0 275L10.7 276.5C21.3 278 42.7 281 64 281.5C85.3 282 106.7 280 128 278.8C149.3 277.7 170.7 277.3 192 278C213.3 278.7 234.7 280.3 256 279C277.3 277.7 298.7 273.3 320 273.8C341.3 274.3 362.7 279.7 384 279C405.3 278.3 426.7 271.7 448 269.8C469.3 268 490.7 271 512 270.5C533.3 270 554.7 266 576 267.2C597.3 268.3 618.7 274.7 640 277C661.3 279.3 682.7 277.7 704 278.3C725.3 279 746.7 282 757.3 283.5L768 285L768 301L757.3 301C746.7 301 725.3 301 704 301C682.7 301 661.3 301 640 301C618.7 301 597.3 301 576 301C554.7 301 533.3 301 512 301C490.7 301 469.3 301 448 301C426.7 301 405.3 301 384 301C362.7 301 341.3 301 320 301C298.7 301 277.3 301 256 301C234.7 301 213.3 301 192 301C170.7 301 149.3 301 128 301C106.7 301 85.3 301 64 301C42.7 301 21.3 301 10.7 301L0 301Z"
                    fill="#6a994e"></path>
            </svg>
        </div>
        <div class="r-captions">
            <span> See our popular Switzerland Tourist Destinations! </span>
        </div>

        <div class="spacer layer1">
            <svg id="visual" viewBox="0 0 768 300" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <path
                    d="M0 88L10.7 90.2C21.3 92.3 42.7 96.7 64 96.5C85.3 96.3 106.7 91.7 128 85.7C149.3 79.7 170.7 72.3 192 73.8C213.3 75.3 234.7 85.7 256 88.5C277.3 91.3 298.7 86.7 320 83.5C341.3 80.3 362.7 78.7 384 80.2C405.3 81.7 426.7 86.3 448 82.8C469.3 79.3 490.7 67.7 512 69C533.3 70.3 554.7 84.7 576 84.2C597.3 83.7 618.7 68.3 640 64.2C661.3 60 682.7 67 704 73.5C725.3 80 746.7 86 757.3 89L768 92L768 0L757.3 0C746.7 0 725.3 0 704 0C682.7 0 661.3 0 640 0C618.7 0 597.3 0 576 0C554.7 0 533.3 0 512 0C490.7 0 469.3 0 448 0C426.7 0 405.3 0 384 0C362.7 0 341.3 0 320 0C298.7 0 277.3 0 256 0C234.7 0 213.3 0 192 0C170.7 0 149.3 0 128 0C106.7 0 85.3 0 64 0C42.7 0 21.3 0 10.7 0L0 0Z"
                    fill="#a7c957"></path>
                <path
                    d="M0 74L10.7 72.5C21.3 71 42.7 68 64 67.7C85.3 67.3 106.7 69.7 128 72.2C149.3 74.7 170.7 77.3 192 75.8C213.3 74.3 234.7 68.7 256 68.2C277.3 67.7 298.7 72.3 320 71C341.3 69.7 362.7 62.3 384 62.3C405.3 62.3 426.7 69.7 448 71.3C469.3 73 490.7 69 512 63.2C533.3 57.3 554.7 49.7 576 48C597.3 46.3 618.7 50.7 640 52.3C661.3 54 682.7 53 704 57.2C725.3 61.3 746.7 70.7 757.3 75.3L768 80L768 0L757.3 0C746.7 0 725.3 0 704 0C682.7 0 661.3 0 640 0C618.7 0 597.3 0 576 0C554.7 0 533.3 0 512 0C490.7 0 469.3 0 448 0C426.7 0 405.3 0 384 0C362.7 0 341.3 0 320 0C298.7 0 277.3 0 256 0C234.7 0 213.3 0 192 0C170.7 0 149.3 0 128 0C106.7 0 85.3 0 64 0C42.7 0 21.3 0 10.7 0L0 0Z"
                    fill="#91b954"></path>
                <path
                    d="M0 36L10.7 39.7C21.3 43.3 42.7 50.7 64 50.2C85.3 49.7 106.7 41.3 128 40.5C149.3 39.7 170.7 46.3 192 50.3C213.3 54.3 234.7 55.7 256 55.3C277.3 55 298.7 53 320 48.7C341.3 44.3 362.7 37.7 384 34.8C405.3 32 426.7 33 448 32C469.3 31 490.7 28 512 27C533.3 26 554.7 27 576 27.3C597.3 27.7 618.7 27.3 640 30.8C661.3 34.3 682.7 41.7 704 45.5C725.3 49.3 746.7 49.7 757.3 49.8L768 50L768 0L757.3 0C746.7 0 725.3 0 704 0C682.7 0 661.3 0 640 0C618.7 0 597.3 0 576 0C554.7 0 533.3 0 512 0C490.7 0 469.3 0 448 0C426.7 0 405.3 0 384 0C362.7 0 341.3 0 320 0C298.7 0 277.3 0 256 0C234.7 0 213.3 0 192 0C170.7 0 149.3 0 128 0C106.7 0 85.3 0 64 0C42.7 0 21.3 0 10.7 0L0 0Z"
                    fill="#7da951"></path>
                <path
                    d="M0 20L10.7 18.7C21.3 17.3 42.7 14.7 64 17C85.3 19.3 106.7 26.7 128 28.8C149.3 31 170.7 28 192 27.7C213.3 27.3 234.7 29.7 256 28.8C277.3 28 298.7 24 320 22.7C341.3 21.3 362.7 22.7 384 25.5C405.3 28.3 426.7 32.7 448 31.8C469.3 31 490.7 25 512 24.8C533.3 24.7 554.7 30.3 576 30.7C597.3 31 618.7 26 640 25.3C661.3 24.7 682.7 28.3 704 26.5C725.3 24.7 746.7 17.3 757.3 13.7L768 10L768 0L757.3 0C746.7 0 725.3 0 704 0C682.7 0 661.3 0 640 0C618.7 0 597.3 0 576 0C554.7 0 533.3 0 512 0C490.7 0 469.3 0 448 0C426.7 0 405.3 0 384 0C362.7 0 341.3 0 320 0C298.7 0 277.3 0 256 0C234.7 0 213.3 0 192 0C170.7 0 149.3 0 128 0C106.7 0 85.3 0 64 0C42.7 0 21.3 0 10.7 0L0 0Z"
                    fill="#6a994e"></path>
            </svg>
        </div>

        <div class="r-content-container">
            <div class="r-content">
                <div class="r-content-description">
                    <span class="r-content-title">
                        Rhine Falls
                    </span>
                    <span class="r-content-details">
                        The Rhine Falls (Rheinfall) is a breathtaking stupendous beauty and the largest plain waterfall in
                        Europe.
                        The falls are located on the High Rhine at Neuhausen am Rheinfall Village and just below
                        Schaffhausen in
                        the north of Switzerland. The Rhine's waters flow at the rate of 23 meters over a breadth of 150
                        meters.
                        The tub's deepness is 13 meters and the average torrential is 600 m per second. Therefore, the
                        visitors
                        are offered a stunning view of the cascading waterfalls.
                    </span>
                </div>
                <img
                    class="r-content-image"src="https://arzotravels.com/wp-content/uploads/2016/07/shutterstock_187912775.jpg">
            </div>
        </div>
    </div>
@endsection
