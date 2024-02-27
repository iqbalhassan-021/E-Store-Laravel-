<!-- <div class="notification disp-flex-row" id="notification">
            <p class="small-text">
                <strong class="up-case">
                    all products are being sold on 70% off
                </strong>
            </p>
            <button class="close-icon disp-flex-row" id="close">
                <span>
                <i class="fas fa-times "></i>
                </span>
            </button>
</div> -->
<div class="header" id="header">
    <div class="body-cover disp-flex-col">
       <div class="navbar disp-flex-row" id="navbar">
            <div class="logoholder disp-flex-row" id="logoholder">
                <a href="/" class="logo no-decoration" >
                @foreach($store as $predetails)
                    {{$predetails->storeName}}
                @endforeach
                </a>
            </div>
            <div class="pages disp-flex-row" id="pages">
                <div class="page-holder disp-flex-row">
                    <a href="/" class="no-decoration">
                        HOME
                    </a>
                </div>
                <div class="page-holder disp-flex-row">
                    <a href="/about" class="no-decoration">
                        ABOUT
                    </a>
                </div>
                <div class="page-holder disp-flex-row">
                    <a href="products" class="no-decoration">
                        SHOP
                    </a>
                </div>
                <div class="page-holder disp-flex-row">
                    <a href="contact" class="no-decoration">
                        CONTACT
                    </a>
                </div>

            </div>
            <div class="search-cart disp-flex-row">
            <form action="" class="search-form disp-flex-row">
                <input type="text" placeholder="Search.." name="search" class="search-box" id="searchbox">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
                <a href="cart" class=" disp-flex-row">
                    <i class="fa fa-cart-shopping " id="prodcutcount">
                        0
                    </i>
                </a>
                <a href="auth" class=" disp-flex-row">
                    <i class="fa fa-fw fa-user">
                    </i>
                </a>
                <a class="nav-call disp-flex-row" onclick="mobilenavshow()" id="bars">
                <i class="fa-solid fa-bars"></i>
                </a>
                <a class="nav-call disp-flex-row" onclick="mobilenavshow()" id="cross">
                <i class="fa-solid fa-x"></i>
                </a>
              
            </div>
       </div>
       <div class="mobile-nav " id="mobilenav">


                    <a href="#" class="no-decoration">
                         <p class="desc">HOME</p>
                    </a>
                    <a href="#" class="no-decoration">
                         <p class="desc">ABOUT</p>
                    </a>
                    <a href="#" class="no-decoration">
                         <p class="desc">SHOP</p>
                    </a>
                    <a href="#" class="no-decoration">
                         <p class="desc">CONTACT</p>
                    </a>
       </div>
    </div>
</div>
<script>
    function mobilenavshow() {
        var nav = document.getElementById('mobilenav');
        var cross = document.getElementById('cross');
        var bars = document.getElementById('bars');
        if (nav.style.display === "none" || nav.style.display === "") {
            nav.style.display = "flex";
            cross.style.display = "flex";
            bars.style.display = "none";
        } else {
            nav.style.display = "none";
            cross.style.display = "none";
            bars.style.display = "flex"; 
        }
    }
</script>