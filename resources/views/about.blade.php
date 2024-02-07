<!DOCTYPE html>
<html lang="en">
<head>
    <!--Main CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/code.js') }}">
    <!--Slick CSS-->
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>About us</title>
</head>
<body>
@include('components.header')
    <div class="about-section">
        <div class="body-cover  disp-flex-row">
        <div class="about-us">
                <p class="title ">
                <strong>
                     About Us
                </strong>
                </p>
                <p class="desc">
                    Welcome to E-Store, your destination for premium shirts that blend style, comfort, 
                    and affordability. Founded with a passion for fashion and a commitment to quality, 
                    we curate a collection of shirts that reflect the latest trends while maintaining timeless 
                    appeal. Our team works tirelessly to ensure that every shirt in our inventory meets our high 
                    standards for craftsmanship and durability. Whether you're looking for the perfect button-down 
                    for the office or a casual tee for weekend outings, we've got you covered. With fast shipping, 
                    easy returns, and exceptional customer service, shopping with us is a breeze. Elevate your wardrobe
                     with E-Store and experience the perfect blend of style and comfort.
                </p>
        </div>
        <div class="about-img disp-flex-row">
            <img src="{{asset('assets/images/about-hero.svg')}}" alt="about-hero">
        </div>
    </div>
    </div>
    <div class="our-services section">
        <div class="body-cover  disp-flex-col">
        <p class="title">
            Our Services
        </p>
        <br>
        <p class="desc ">
            Discover convenience and excellence with E-Store's seamless online shopping experience. 
            From swift shipping to personalized customer support, we're committed to delivering quality 
            products and exceptional service straight to your doorstep.
        </p>
    </div>
    </div>
    <div class="services">
        <div class="body-cover disp-flex-row">
            <div class="service-grid">
                <div class="service-card disp-flex-col">
                        <i class="fa fa-truck fa-lg"></i>
                        <br>
                        <br>
                    <p class="desc">
                        Delivery Services
                    </p>
                </div>
                <div class="service-card disp-flex-col">
                        <i class="fas fa-exchange-alt"></i>
                        <br>
                        <br>
                    <p class="desc">
                    Shipping & Return
                    </p>
                </div>
                <div class="service-card disp-flex-col">
                        <i class="fa fa-percent"></i>
                        <br>
                        <br>
                    <p class="desc">
                    Promotion
                    </p>
                </div>
                <div class="service-card disp-flex-col">
                        <i class="fa fa-user"></i>
                        <br>
                        <br>
                    <p class="desc">
                    Great user experience
                    </p>
                </div>
            </div>
        </div>
    </div>
@include('components.brands')
@include('components.footer')
</body>
</html>