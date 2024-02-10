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
    <div class="user-wrapper">
        <div class="body-cover">
            <div class="user-container">
                <div class="user-name">
                    <p class="desc">
                        <strong>
                            Username : 
                        </strong>
                    </p>
                    <p class="desc">
                        hassan47
                    </p>
                </div>
                <div class="items-section disp-flex-col">
                    <p class="desc">
                        My Cart
                    </p>
                    <table>
                        <tr>
                        <div class="cart-item disp-flex-row">
                        <div class="cart-img disp-flex-row">
                            <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_01.jpg')}}" alt="">
                        </div>
                        <div class="item-desc">
                            <p class="desc">
                            In e-commerce, the term "Featured Product" typically refers to an item that is highlighted or prominently displayed on the store's website or landing page. 
                            This product is often chosen by the store owner or manager to showcase a particular item that they want to promote or draw attention to.
                            </p>
                        </div>
                        <div class="price-sction">
                        <p class="desc">
                                <strong>
                                    Name : 
                                </strong>
                                <span>
                                    Product 
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Code : 
                                </strong>
                                <span>
                                Product code
                                </span>

                            </p>
                            <p class="desc">
                                <strong>
                                    Price : 
                                </strong>
                                <span>
                                750
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Shipping Fee : 
                                </strong>
                        
                                <span>
                               210
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Quantity : 
                                </strong>
                                <span>
                                1
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Total : 
                                </strong>
                                <span>
                                    960
                                </span>
                            </p>
                        </div>
                        <div class="remove">
                            <button class="remove-btn">
                            <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                        </tr>
                        <tr>
                        <div class="cart-item disp-flex-row">
                        <div class="cart-img disp-flex-row">
                            <img class="feature-prod-img" src="{{asset('assets/images/feature_prod_02.jpg')}}" alt="">
                        </div>
                        <div class="item-desc">
                            <p class="desc">
                            In e-commerce, the term "Featured Product" typically refers to an item that is highlighted or prominently displayed on the store's website or landing page. 
                            This product is often chosen by the store owner or manager to showcase a particular item that they want to promote or draw attention to.
                            </p>
                        </div>
                        <div class="price-sction">
                        <p class="desc">
                                <strong>
                                    Name : 
                                </strong>
                                <span>
                                    Product 
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Code : 
                                </strong>
                                <span>
                                Product code
                                </span>

                            </p>
                            <p class="desc">
                                <strong>
                                    Price : 
                                </strong>
                                <span>
                                750
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Shipping Fee : 
                                </strong>
                        
                                <span>
                               210
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Quantity : 
                                </strong>
                                <span>
                                1
                                </span>
                            </p>
                            <p class="desc">
                                <strong>
                                    Total : 
                                </strong>
                                <span>
                                    960
                                </span>
                            </p>
                        </div>
                        <div class="remove">
                            <button class="remove-btn">
                            <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                 
                        </tr>
                        <tr>
                            <td  width="80%">
                            <div class="grand-total">
                                <p class="desc right">
                                    <strong>
                                        Grand Total : 
                                    </strong>
                                    <span>
                                        2250
                                    </span>
                                </p>
                            </div>
                            </td>
                           <td>
                           <div class="grand-total">
                               <button class="button">
                                    Checkout
                               </button>
                            </div>
                           </td>
                        </tr>

                    </table>
   
                </div>
            </div>
        </div>
    </div>
@include('components.footer')
</body>
</html>