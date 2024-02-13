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
<body style=" ">

<div class="admin-panel disp-row">

        <div class="nav-panel">
            <p class="tagline">
                <strong>
                    Store Name
                </strong>
            </p>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-gauge"></i>
                 <span class="x-dash-btn">Dashboard</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-store"></i>
                <span class="x-dash-btn">Edit Store</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-user"></i>
                <span class="x-dash-btn">Edit Profile</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-list"></i>
                <span class="x-dash-btn">Categories</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-brands fa-product-hunt"></i>
                <span class="x-dash-btn">Products</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-border-all"></i>
                <span class="x-dash-btn">New Orders</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-user"></i>
                <span class="x-dash-btn">Users</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-comment"></i>
                <span class="x-dash-btn">Feedbacks</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="x-dash-btn">Home</span>
                </p>
            </button>
            <button class="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-circle-chevron-up fa-rotate-270"></i>
                <span class="x-dash-btn">collapse</span>
                </p>
            </button>
        </div>
            <div class="setting-panel ">
                <div class="dashborad">
                <div class="tab">
                    <div class="welcome disp-flex-row">
                        <div class="info">
                            <p class="title">
                                <strong>
                                    Admin Panel
                                </strong>
                            </p>
                            <p class="desc">
                                Admin control in an e-commerce website is essential for managing product listings, user accounts, and transactions effectively. It allows administrators to oversee inventory, moderate user-generated content, and ensure secure transactions, contributing to the website's functionality and customer satisfaction. Admins have the authority to add, edit, or remove products, manage user accounts securely, and monitor transactions for a seamless e-commerce experience.
                            </p>
                        </div>
                        <div class="admin-img disp-flex-row">
                        <img src="{{asset('assets/images/admin-img.png')}}" alt="user" class="user-img">
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="controls disp-flex-row">
                        <div class="grid">
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                    <i class="fa-solid fa-user"></i>
                                </p>
                                <p class="desc">
                                Users
                                <span class="x-dash-btn">0</span>
                                </p>
                               
                            </div>
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                <i class="fa-solid fa-border-all"></i>
                                </p>
                                <p class="desc">
                                New Orders
                                <span class="x-dash-btn">0</span>
                                </p>
                               
                            </div>
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                <i class="fa-brands fa-product-hunt"></i>
                                </p>
                                <p class="desc">
                                All Products
                                <span class="x-dash-btn">0</span>
                                </p>
                               
                            </div>
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                <i class="fa-solid fa-list"></i>
                                </p>
                                <p class="desc">
                                Categories
                                <span class="x-dash-btn">0</span>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</div>
</body>
</html>