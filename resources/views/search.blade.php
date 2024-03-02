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
    <!--Fancybox pop-up-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <title>Searched for {{ $searchResults->first()->productName }}</title>
</head>
<body>
@include('components.header')
    <div class="the-product">
        <div class="body-cover ">
            <div class="product-container disp-row">
            <div class="product-visual ">
                <div class="container">
                    <img src="{{$searchResults->first()->productImage}}" alt="Product">
                </div>
            </div>
            <div class="product-details">
            <div class="details-tab">
                <p class="desc">
                <strong>Product Name : </strong> {{$searchResults->first()->productName}}
                </p>
                <p class="desc">
                 <strong>Product Price : </strong>${{$searchResults->first()->productPrice}}
                </p>
                <p class="desc">
                <strong>Product ID : </strong>{{$searchResults->first()->id}}
                </p>
                <p class="desc">
                    <strong>
                        Description
                    </strong>
                </p>
                <p class="desc">
                {{$searchResults->first()->productDescription}}
                </p>
                <p class="desc">
                    <strong>
                        Category
                    </strong>
                </p>
                <p class="desc">
                {{$searchResults->first()->productCategory}}
                </p>
                <p class="desc">
                    <strong>
                        Shipping Fee
                    </strong>
                </p>
                <p class="desc">
                    RS : 200
                </p>
                <div class="size-quality">
                    <div class="size-container">
                        <p class="desc">
                           Available Size : 
                           
                        </p>
                            <p class="desc">
                            {{$searchResults->first()->productsize}}
                            </p>
                    </div>
                    <div class="quality">
                        <p class="desc">
                            Quality : 
                        </p>

                        <button class="button"  onclick="decrementCounter()">
                            -
                        </button>
                        <p class="desc" style="margin-left: 10px;" id="quantity">
                            1
                        </p>
                        <button class="button" onclick="incrementCounter()">
                            +
                        </button>
                    </div>
                </div>
                <div class="buy-cart disp-flex-row">
                         <button class="button button-big" data-fancybox data-src="#orderPopup">
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
    </div>

@include('components.related_posts')
@include('components.footer')
<div id="orderPopup" style="display: none;">
    <div class="popup-content">
         <!-- Product Name -->
         <p class="desc">
         <strong>Product Name : </strong> {{$searchResults->first()->productName}}
        </p>
                 <!-- Product Name -->
        <p class="desc">
        <strong>Product ID : </strong>{{$searchResults->first()->id}}
        </p>
        
        <!-- Product Description -->
        <p class="desc">{{$searchResults->first()->productDescription}}</p>
        
        <!-- Product Price -->
        <p class="desc">     <strong>Product Price : </strong>${{$searchResults->first()->productPrice}}</p>
        <!-- Selected Size -->
        <p class="desc">
        <strong>Product Size : </strong> {{$searchResults->first()->productsize}}
        </p>
        <!-- Selected Size -->
        <p class="desc" id="_quantity"><strong>Quantity : </strong>1</p>
        <!-- Order Form -->
        <form id="orderForm">
            <!-- Address Input -->
            <input type="text" name="address" placeholder="Enter Address" required class="input-field"><br>
            
            <!-- Phone Number Input -->
            <input type="tel" name="phone" placeholder="Enter Phone Number" required class="input-field"><br>

            <!-- Submit Button -->
            <button type="submit" class="button button-big">Confirm Order</button>
        </form>
    </div>
</div>


<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script>
    // JavaScript for counter functionality
    let count = 1; // Initialize counter

    function updateCounter() {
        // Update the text content of the paragraph element with the current count
        document.getElementById('quantity').innerHTML = count;
        $('#_quantity').text(count);
    }

    function incrementCounter() {
        // Increment the count and update the counter display
        count++;
        updateCounter();
    }

    function decrementCounter() {
        // Decrement the count (if greater than 1) and update the counter display
        if (count > 1) {
            count--;
        } else {
            // If count is 1 or less, set it to 1
            count = 1;
        }
        updateCounter();
    }
    $(document).ready(function() {
        // Initialize fancybox
        $("[data-fancybox]").fancybox({
            autoFocus: false
        });
        
        // Handle form submission
        $('#orderForm').submit(function(event) {
            event.preventDefault();
            // Add your code to process the order here
            alert('Order Confirmed!');
            $.fancybox.close();

        });
    });
</script>

</body>
</html>