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
    <div class="login-section">
        <div class="body-cover disp-flex-row">
            <div class="login-tab disp-flex-row">
                <div class="col1 disp-flex-col">
                    <div class="form-container">
                        <div class="swicth">
                            <button onclick="show('login_form','signup_form','resetpass')">
                               <p class="desc">
                                    Login
                               </p>
                            </button>
                            <button onclick="show('signup_form','login_form','resetpass')">
                                <p class="desc">
                                    Signup
                                </p>
                            </button>
                        </div>
                        <form class="login-form disp-flex-col" id="login_form">
                            
                            <label for="username" class="desc left">Username</label>
                            <input required class="input-field login-input desc" type="text" id="username" name="username" placeholder="username">
                            <label for="password" class="desc left">Password</label>
                            <input required class="input-field login-input desc" type="password" id="password" name="password" placeholder="password">
                            <div class="x-tab disp-row">
                               
                                <label for="showpass" class="left desc" onclick="myFunction()">
                                <input type="checkbox" name="showpass" id="showpass" class="desc"  onclick="myFunction()">
                                        Show password
                                </label>
                                <a href="#" id="fpas" class="link no-decoration right" onclick="show('resetpass','login_form','signup_form')">
                                    <p class="desc">
                                        Forgot password
                                    </p>
                                </a>
                            </div>
                            <span class="">
                                <p class="desc warning">
                      
                                </p>
                            </span>
                            <input type="submit" class="login desc" value="Login">
                        </form>
                        <form class="signup-form disp-flex-col" id="signup_form">
                            
                            <label for="name" class="desc left">Name</label>
                            <input required class="input-field login-input desc" type="text" id="name" name="name" placeholder="Full Name">
                            <label for="username" class="desc left">Username</label>
                            <input required class="input-field login-input desc" type="username" id="username" name="username" placeholder="Enter a username">
                            <label for="password" class="desc left">Password</label>
                            <input required class="input-field login-input desc" type="password" id="password" name="password" placeholder="Set a password">
                            <label for="securityquestion" class="desc left">Seacurity Quesntion</label>
                            <input required class="input-field login-input desc" type="text" id="securityquestion" name="securityquestion" placeholder="Your last pet was a?">
                            <span class="">
                                <p class="desc warning">
                           
                                </p>
                            </span>
                            <input type="submit" class="login desc" value="Signup">
                        </form>
                        <form class="resetpass-form disp-flex-col" id="resetpass">
                        <label for="username" class="desc left">Username</label>
                            <input required class="input-field login-input desc" type="text" id="username" name="username" placeholder="username">
                          
                             <label for="securityquestion" class="desc left">Seacurity Quesntion</label>
                            <input required class="input-field login-input desc" type="text" id="securityquestion" name="securityquestion" placeholder="Your last pet was a?">
                            <label for="password" class="desc left">New Password</label>
                            <input required class="input-field login-input desc" type="password" id="password" name="password" placeholder="Set a password">
                            <span class="">
                                <p class="desc warning">
                        
                                </p>
                            </span>
                            <input type="submit" class="login desc" value="Signup">
                        </form>
                    </div>
                </div>
                <div class="col1 disp-flex-col">
                    <img src="{{asset('assets/images/mobile_login.png')}}" alt="login here">
                </div>
            </div>
        </div>
    </div>
@include('components.footer')
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function show(toshow,tohide,xtohide){
    document.getElementById(toshow).style.display = "flex";
    document.getElementById(tohide).style.display = "none";
    document.getElementById(xtohide).style.display = "none";
}
</script>

</body>
</html>