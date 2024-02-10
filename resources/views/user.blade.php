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
    
    <title></title>
</head>
<body>
@include('components.header')
<div class="page-wrapper">
    <div class="body-cover disp-row">
        <div class="user-panel">
            <div class="user-info ">
                <img src="{{asset('assets/images/man-user.svg')}}" alt="user" class="user-img">
                <p class="desc">
                    <strong>
                        HASSAN ASHFAQ
                    </strong>
                </p>
                <p class="desc">
                    hassan47
                </p>
                <button>
                    <p class="desc">
                        Edit Profile
                        <i class="fas fa-edit"></i>
                    </p>
                </button>
            </div>
        </div>
        <div class="user-settings disp-flex-col">
            <div class="tabbed-grid">
                <a href="" class="no-decoration">
                <div class="tab-caller disp-flex-col">
                    <p class="desc">
                    <i class="fa fa-cart-shopping " id="prodcutcount">
                        0
                    </i>
                    </p>
                    <p class="desc">
                        Cart
                    </p>
                </div>
                </a>
                <a href="" class="no-decoration">
                <div class="tab-caller disp-flex-col">
                    <p class="desc">
                    <i class="fa-solid fa-truck-fast">
                        0
                    </i>
                    </p>
                    <p class="desc">
                        To be Shipped
                    </p>
                </div>
                </a>
                <a href="" class="no-decoration">
                <div class="tab-caller disp-flex-col">
                    <p class="desc">
                    <i class="fa-solid fa-box">
                        0
                    </i>
                    </p>
                    <p class="desc">
                        Products Purchased
                    </p>
                </div>
                </a>
            </div>
            <div class="edit-profile disp-flex-col">
            <form class="edit-user disp-flex-col" id="signup_form">
                            
                            <label for="name" class="desc left">Name</label>
                            <input required class="input-field login-input desc" type="text" id="name" name="name" placeholder="Full Name">
                            <label for="username" class="desc left">Username</label>
                            <input required class="input-field login-input desc" type="username" id="username" name="username" placeholder="Enter a username">
                            <label for="password" class="desc left">Password</label>
                            <input required class="input-field login-input desc" type="password" id="password" name="password" placeholder="Set a password">
                            <label for="phone" class="desc left">Phone Nnmber</label>
                            <input required class="input-field login-input desc" type="text" id="phone" name="phone" placeholder="Phone Nnmber">
                           
                            <label for="address" class="desc left">Shipping Address</label>
                            <input required class="input-field login-input desc" type="text" id="address" name="address" placeholder="Shipping Address">
                           
                            <label for="securityquestion" class="desc left">Seacurity Quesntion</label>
                            <input required class="input-field login-input desc" type="text" id="securityquestion" name="securityquestion" placeholder="Your last pet was a?">
                       
                            <span class="">
                                <p class="desc warning">
                           
                                </p>
                            </span>
                            <input type="submit" class="login desc" value="Save Changes">
                        </form>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
</body>
</html>