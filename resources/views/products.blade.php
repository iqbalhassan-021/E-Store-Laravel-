<!DOCTYPE html>
<html>
<head>
    <!--Main CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/code.js') }}">

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>E-Store</title>
</head>
<body>
    @include('components.header')
    <div class="products">
        <div class="body-cover disp-row">
            <div class="category-tab">
                <p class="desc ">
                    Categories
                </p>
                <ul>
                    <li>
                        <button class="cat-b">
                            <p class="desc">
                                Luxury
                            </p>
                        </button>
                    </li>
                    <li>
                        <button class="cat-b">
                            <p class="desc">
                            Shirts
                            </p>
                        </button>
                    </li>
                    <li>
                        <button class="cat-b">
                            <p class="desc">
                            Jackets
                            </p>
                        </button>
                    </li>
                    <li>
                        <button class="cat-b">
                            <p class="desc">
                            Jeans
                            </p>
                        </button>
                    </li>
                    <li>
                        <button class="cat-b">
                            <p class="desc">
                            Shoes
                            </p>
                        </button>
                    </li>
                    <li>
                        <button class="cat-b">
                            <p class="desc">
                            Smart Watchs
                            </p>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="show-products disp-flex-row">
                <div class="grid-f3">
                <div class="card">
                    <a href="#">
                        <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_01.jpg')}}" alt="">
                    </a>
                    <div class="tab disp-flex-row">
                        <p class="desc align-left" style="color:#bcbcbc !important;">
                            Price
                        </p>
                        <p class="desc align-right" style="color:#bcbcbc !important;">
                            $30.00
                        </p>
                    </div>
                    <div class="tab">
                        <a href="#" class="no-decoration">
                            <p class="tagline">
                                Smart Tourch
                            </p>
                            <span>ST100</span>
                        </a>
                    </div>
                    <div class="tab">
                        <p class="desc">
                        A torch is a portable handheld device that produces a beam of light, 
                        commonly used for illumination in various outdoor and indoor settings
                        </p>
                    </div>
                    <div class="tab">
                        <p class="desc" style="color:#bcbcbc !important;">
                            Reviews(24)    
                        </p>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_02.jpg')}}" alt="">
                    </a>
                    <div class="tab disp-flex-row">
                        <p class="desc align-left" style="color:#bcbcbc !important;">
                            Price
                        </p>
                        <p class="desc align-right" style="color:#bcbcbc !important;">
                            $30.00
                        </p>
                    </div>
                    <div class="tab">
                        <a href="#" class="no-decoration">
                            <p class="tagline">
                                Smart Watches
                            </p>
                            <span>SW100</span>
                        </a>
                    </div>
                    <div class="tab">
                        <p class="desc">
                        The Apple Watch is a wearable smartwatch designed by Apple Inc., offering various 
                        features including fitness tracking, notifications, apps, and customizable watch faces.
                        </p>
                    </div>
                    <div class="tab">
                        <p class="desc" style="color:#bcbcbc !important;">
                            Reviews(24)    
                        </p>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_03.jpg')}}" alt="">
                    </a>
                    <div class="tab disp-flex-row">
                        <p class="desc align-left" style="color:#bcbcbc !important;">
                            Price
                        </p>
                        <p class="desc align-right" style="color:#bcbcbc !important;">
                            $30.00
                        </p>
                    </div>
                    <div class="tab">
                        <a href="#" class="no-decoration">
                            <p class="tagline">
                                Smart Cameras
                            </p>
                            <span>SC100</span>
                        </a>
                    </div>
                    <div class="tab">
                        <p class="desc">
                        "A camera is a device used to capture still or moving images by recording light onto a 
                        photosensitive surface, such as film or a digital sensor."
                        </p>
                    </div>
                    <div class="tab">
                        <p class="desc" style="color:#bcbcbc !important;">
                            Reviews(24)    
                        </p>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_01.jpg')}}" alt="">
                    </a>
                    <div class="tab disp-flex-row">
                        <p class="desc align-left" style="color:#bcbcbc !important;">
                            Price
                        </p>
                        <p class="desc align-right" style="color:#bcbcbc !important;">
                            $30.00
                        </p>
                    </div>
                    <div class="tab">
                        <a href="#" class="no-decoration">
                            <p class="tagline">
                                Smart Tourch
                            </p>
                            <span>ST100</span>
                        </a>
                    </div>
                    <div class="tab">
                        <p class="desc">
                        A torch is a portable handheld device that produces a beam of light, 
                        commonly used for illumination in various outdoor and indoor settings
                        </p>
                    </div>
                    <div class="tab">
                        <p class="desc" style="color:#bcbcbc !important;">
                            Reviews(24)    
                        </p>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_02.jpg')}}" alt="">
                    </a>
                    <div class="tab disp-flex-row">
                        <p class="desc align-left" style="color:#bcbcbc !important;">
                            Price
                        </p>
                        <p class="desc align-right" style="color:#bcbcbc !important;">
                            $30.00
                        </p>
                    </div>
                    <div class="tab">
                        <a href="#" class="no-decoration">
                            <p class="tagline">
                                Smart Watches
                            </p>
                            <span>SW100</span>
                        </a>
                    </div>
                    <div class="tab">
                        <p class="desc">
                        The Apple Watch is a wearable smartwatch designed by Apple Inc., offering various 
                        features including fitness tracking, notifications, apps, and customizable watch faces.
                        </p>
                    </div>
                    <div class="tab">
                        <p class="desc" style="color:#bcbcbc !important;">
                            Reviews(24)    
                        </p>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_03.jpg')}}" alt="">
                    </a>
                    <div class="tab disp-flex-row">
                        <p class="desc align-left" style="color:#bcbcbc !important;">
                            Price
                        </p>
                        <p class="desc align-right" style="color:#bcbcbc !important;">
                            $30.00
                        </p>
                    </div>
                    <div class="tab">
                        <a href="#" class="no-decoration">
                            <p class="tagline">
                                Smart Cameras
                            </p>
                            <span>SC100</span>
                        </a>
                    </div>
                    <div class="tab">
                        <p class="desc">
                        "A camera is a device used to capture still or moving images by recording light onto a 
                        photosensitive surface, such as film or a digital sensor."
                        </p>
                    </div>
                    <div class="tab">
                        <p class="desc" style="color:#bcbcbc !important;">
                            Reviews(24)    
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.featured_products')
    @include('components.brands')
    @include('components.footer')

</body>
</html>
