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
    <div class="the-product">
        <div class="body-cover disp-row">
            <div class="product-visual ">
                <div class="container">
                    <img src="{{asset('assets/images/feature_prod_01.jpg')}}" alt="Product">
                </div>
            </div>
            <div class="product-details">
            <div class="details-tab">
                <p class="desc">
                    Product Name
                </p>
                <p class="desc">
                    Product price
                </p>
                <p class="desc">
                    Product Code
                </p>
                <p class="desc">
                    <strong>
                        Description
                    </strong>
                </p>
                <p class="desc">
                A torch is a portable handheld device that produces a beam of light, 
                commonly used for illumination in various outdoor and indoor settings  
                </p>
                <p class="desc">
                    <strong>
                        Specification
                    </strong>
                </p>
                <p class="desc">
                    Lorem ipsum dolor sit <br>
                    Amet, consectetur <br>
                    Adipiscing elit,set <br>
                    Duis aute irure <br>
                    Ut enim ad minim <br>
                    Dolore magna aliqua <br>
                    Excepteur sint
                </p>
                <div class="size-quality">
                    <div class="size-container">
                        <p class="desc">
                            Size : 
                        </p>
                        <button class="button">
                            S
                        </button>
                        <button class="button">
                            M
                        </button>
                        <button class="button">
                            L
                        </button>
                        <button class="button">
                            XL
                        </button>
                    </div>
                    <div class="quality">
                        <p class="desc">
                            Quality : 
                        </p>

                        <button class="button">
                            -
                        </button>
                        <p class="desc" style="margin-left: 10px;">
                            0
                        </p>
                        <button class="button">
                            +
                        </button>
                    </div>
                </div>
                <div class="buy-cart disp-flex-row">
                         <button class="button button-big">
                            Buy
                        </button> 
                        <button class="button button-big">
                            Add To Cart
                        </button> 
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="comment-section disp-flex-col">
        <div class="comment-box disp-flex-col">
            <form class="comment-form disp-flex-row search-form disp-row sub">
            <input type="text" placeholder="Post a comment" name="comment" class="search-box desc" id="comment" required>
                <button type="submit">
                    Post
                    <i class="fa fa-check">
                    </i>
                </button>
            </form>
        </div>
        <div class="the-comments">
            <table class="the-comment">
              <tr>
                <th>
                    <p class="desc">
                        <strong>
                            Comments
                        </strong>
                    </p>
                    </th>
                    <th>
                    <p class="desc">
                        <strong>
                            Date
                        </strong>
                    </p>
                    </th>
              </tr>
              <tr>
                <td width="80%">
                    <p class="desc">
                    A torch is a portable handheld device that produces a beam of light, commonly used for illumination in various outdoor and indoor settings
                    </p>
                </td>
                <td width="20%">
                    <p class="desc">
                        30-1-2024
                    </p>
                </td>
              </tr>
            </table>
        </div>
    </div>
@include('components.related_posts')
@include('components.footer')
</body>
</html>