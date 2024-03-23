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
    
    <title> {{ $store->last()->storeName}}</title>
</head>
<body>

<div class="admin-panel disp-row">
        <div class="nav-panel">
            <div class="sticky">
            <p class="tagline">
                <strong>
                {{ $store->last()->storeName}}
                </strong>
            </p>
            <button class="dash-btn" id="dash-btn" onclick="showdive('dasboard','editstore','editslides','newcatg','editprods','neworders','blogs','userstable','subscribers','queries')" >
                <p class="desc">
                <i class="fa-solid fa-gauge"></i>
                 <span class="x-dash-btn" id="x-dash-btn">Dashboard</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('editstore','dasboard','editslides','newcatg','editprods','neworders','userstable','blogs','subscribers','queries')">
                <p class="desc">
                <i class="fa-solid fa-store"></i>
                <span class="x-dash-btn " id="x-dash-btn">Edit Store</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('editslides','editstore','dasboard','newcatg','editprods','neworders','userstable','blogs','subscribers','queries')">
                <p class="desc">
                <i class="fa-brands fa-slideshare"></i>
                <span class="x-dash-btn" id="x-dash-btn">Slider</span>
                </p>
            </button>

            <button class="dash-btn"  id="dash-btn" onclick="showdive('newcatg','editslides','dasboard','editprods','neworders','userstable','blogs','editstore','subscribers','queries')">
                <p class="desc">
                <i class="fa-solid fa-list"></i>
                <span class="x-dash-btn" id="x-dash-btn">Categories</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('editprods','newcatg','editslides','dasboard','neworders','userstable','blogs','editstore','subscribers','queries')">
                <p class="desc">
                <i class="fa-brands fa-product-hunt"></i>
                <span class="x-dash-btn">Products</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('neworders','editprods','newcatg','editslides','dasboard','userstable','blogs','editstore','subscribers','queries')">
                <p class="desc">
                <i class="fa-solid fa-border-all"></i>
                <span class="x-dash-btn" id="x-dash-btn" >New Orders</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('userstable','neworders','editprods','newcatg','editslides','dasboard','blogs','editstore','subscribers','queries')">
                <p class="desc">
                <i class="fa-solid fa-user"></i>
                <span class="x-dash-btn" id="x-dash-btn">Users</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('subscribers','neworders','editprods','newcatg','editslides','dasboard','blogs','editstore','userstable','queries')">
                <p class="desc">
                <i class="fa-solid fa-check"></i>
                <span class="x-dash-btn" id="x-dash-btn">Subscribers</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('queries','neworders','editprods','newcatg','editslides','dasboard','blogs','editstore','userstable','subscribers')">
                <p class="desc">
                <i class="fa-solid fa-message"></i>
                <span class="x-dash-btn" id="x-dash-btn">Queries</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn" onclick="showdive('blogs','neworders','editprods','newcatg','editslides','dasboard','queries','editstore','userstable','subscribers')">
                <p class="desc">
                <i class="fa-brands fa-blogger-b"></i>
                <span class="x-dash-btn" id="x-dash-btn">Blogs</span>
                </p>
            </button>
        <a href="/">
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="x-dash-btn" id="x-dash-btn">Home</span>
                </p>
            </button>
            </a>
            </div>
        </div>
            <div class="setting-panel ">
                <div class="dashborad" id="dasboard">
                <div class="tab dash">
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
                        <div class="tab-grid">
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                    <i class="fa-solid fa-user"></i>
                                </p>
                                <p class="desc">
                                Users
                                <span class="x-dash-btn">
                                {{$user_count}}
                                </span>
                                </p>
                               
                            </div>
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                <i class="fa-solid fa-border-all"></i>
                                </p>
                                <p class="desc">
                                New Orders
                                <span class="x-dash-btn">
                                {{$order_count}}
                                </span>
                                </p>
                               
                            </div>
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                <i class="fa-brands fa-product-hunt"></i>
                                </p>
                                <p class="desc">
                                Products : 
                                <span class="x-dash-btn">
                                <td>{{$products_count}}</td>
                                </span>
                                </p>
                               
                            </div>
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                <i class="fa-solid fa-list"></i>
                                </p>
                                <p class="desc">
                                Categories
                                <span class="x-dash-btn">
                                    {{$categories_count}}
                                </span>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit-store" id="editstore">

                <h1 class="title">
                    Edit the store
                </h1>
            <form action="store_details" method="post" class="edit-store-form">
            @csrf <!-- CSRF protection -->
        <label for="storeName">Store Name:</label><br>
        <input type="text" id="storeName" name="storeName" class="input-field" required value="{{$storedetails->last()->storeName}}"><br>
        
        
        <label for="facebookLink">Facebook Link:</label><br>
        <input type="text" id="facebookLink" name="facebookLink" class="input-field" required value="{{$storedetails->last()->facebookLink}}"><br>
        
        <label for="instagramLink">Instagram Link:</label><br>
        <input type="text" id="instagramLink" name="instagramLink" class="input-field" required value="{{$storedetails->last()->instagramLink}}"><br>
        
        <label for="whatsappLink">WhatsApp Link:</label><br>
        <input type="text" id="whatsappLink" name="whatsappLink" class="input-field" required value="{{$storedetails->last()->whatsappLink}}"><br>
        
        <label for="linkedinLink">LinkedIn Link:</label><br>
        <input type="text" id="linkedinLink" name="linkedinLink" class="input-field" required value="{{$storedetails->last()->linkedinLink}}"><br>
        
        <label for="storeAddress">Store Address:</label><br>
        <textarea id="storeAddress" name="storeAddress" class="input-field" required >{{$storedetails->last()->storeAddress}}</textarea><br>
        
        <label for="storePhone">Store Phone Number:</label><br>
        <input type="text" id="storePhone" name="storePhone" class="input-field" required value="{{$storedetails->last()->storePhone}}"><br>
        
        <label for="storeEmail">Store Email:</label><br>
        <input type="text" id="storeEmail" name="storeEmail" class="input-field" required value="{{$storedetails->last()->storeEmail}}"><br>
        
        <input type="submit" value="Submit" class="submit-btn">
    </form>
            </div>
            <div class="edit-slides" id="editslides">
            <table class="all-user">
        <thead>
            <tr>

                <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Description</th>
                <th>Product Image</th>
             
            
            </tr>
        </thead>
        <tbody>
        @foreach($slider as $slides)
            <tr>

                <td>{{$slides->slideproductName}}</td>
                <td>{{$slides->id}}</td>
                <td>{{$slides->slideproductDesc}}</td>
                <td>
                <img src="{{$slides->slideproductIMG}}" alt="{{$slides->slideproductName}}">
                </td>
               
            </tr>
            @endforeach

        </tbody>
    </table>
            <form action="the_slider" method="post" enctype="multipart/form-data">
            @csrf <!-- CSRF protection -->
                <label for="slideproductName">Product Name:</label><br>
                <input type="text" id="slideproductName" name="slideproductName" class="input-field" required><br>
              

                <label for="id">Product Code:</label><br>
                <input type="text" id="id" name="id" class="input-field" required><br>
                
                <label for="slideproductDesc">Product Description:</label><br>
                <textarea id="slideproductDesc" name="slideproductDesc" class="input-field"  required></textarea><br>
                
                <label for="slideproductIMG">Product Image:</label><br>
                <input type="file" id="slideproductIMG" name="slideproductIMG" class="input-field" accept="image/*" required><br>
                
                
                <input type="submit" value="Submit" class="submit-btn">
    </form>
            </div>

            <div class="new-categories" id="newcatg">
            <table class="all-user">
        <thead>
            <tr>
                <th>Category No#</th>
                <th>Category Name</th>
                <th>Category Image</th>

            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$srnum++}}</td>
                <td>{{$category->categoryName}}</td>
                <td><img src="{{$category->categoryImage}}" alt="{{$category->categoryName}}"></td>

            </tr>
            @endforeach

            </tbody>
    </table>
            <form action="the_categories" method="post" enctype="multipart/form-data">
            @csrf <!-- CSRF protection -->
                <label for="categoryImage">Category Image:</label><br>
                <input type="file" id="categoryImage" name="categoryImage" class="input-field" ccept="image/png, image/jpeg" required><br>
                <label for="categoryName">Category Name:</label><br>
                <input type="text" id="categoryName" name="categoryName" class="input-field" required><br>

                <input type="submit" value="Add Category" class="submit-btn">
            </form>
            <!-- Add more rows as needed -->

            </div>
            <div class="edit-products" id="editprods">
            <table class="all-user">
        <thead>
            <tr>
                <th>Product NO#</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product ID</th>
                <th>Product Description</th>
                <th>Category</th>
                <th>Size</th>
                <th>Shipping Fees</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $data)
            <tr>
                <td>{{$srnum++}}</td>
                <td><img src="{{$data->productImage}}" alt="{{$data->productName}}"></td>
                <td>{{$data->productName}}</td>
                <td>{{$data->productPrice}}</td>
                <td>{{$data->id}}</td>
                <td>{{$data->productDescription}}</td>
                <td>{{$data->productCategory}}</td>
                <td>{{$data->productsize}}</td>
                <td>{{$data->shippingfees}}</td>
                <td>
                <a href=""><button class="submit-btn ">Edit</button></a>
                <a href="{{url('delete/'.$data->id)}}"><button class="submit-btn warning">Remove</button></a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <form action="the_products" method="post" enctype="multipart/form-data">
    @csrf <!-- CSRF protection -->
        <label for="productImage">Product Image:</label><br>
        <input type="file" id="productImage" name="productImage" class="input-field" accept="image/png, image/jpeg" required><br>
        
        <label for="productName">Product Name:</label><br>
        <input type="text" id="productName" name="productName" class="input-field" required><br>
        
        <label for="productPrice">Product Price:</label><br>
        <input type="number" id="productPrice" name="productPrice" class="input-field" min="0" required><br>
        
        <label for="id">Product ID:</label><br>
        <input type="text" id="id" name="id" class="input-field" required><br>
        
        <label for="productDescription">Product Description:</label><br>
        <textarea id="productDescription" name="productDescription" class="input-field" required></textarea><br>
        
        <label for="productCategory">Category:</label><br>
        <input type="text" id="productCategory" name="productCategory" class="input-field" required><br>
        
        <label for="productsize">Size:</label><br>
        <input type="text" id="productsize" name="productsize" class="input-field" required><br>

        <label for="shippingfees">Shipping Fees:</label><br>
        <input type="text" id="shippingfees" name="shippingfees" class="input-field" required><br>
        
        <input type="submit" value="Add Product" class="submit-btn">
    </form>
            </div>
            <div class="new-orders" id="neworders">
                <table  class="all-user">
            <thead>
            <tr>
                <th>Buyer Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $item)
            <tr>
                <td>{{$item->buyername}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->productName}}</td>
                <td>{{$item->productId}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->productPrice}}</td>
                <td>
                <button class="submit-btn ">Aprove</button>
                 
                </td>
            </tr>
            @endforeach
           
            <!-- Add more rows as needed -->
        </tbody>
    </table>
            </div>
            <div class="all-userstable" id="userstable">
            <table class="all-user">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Phone Number or Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>

            <div class="all-queries" id="queries">
            <table class="all-user">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Query</th>
            </tr>
        </thead>
        <tbody>
            @foreach($queries as $query)
            <tr>
                <td>{{$query->fname}}</td>
                <td>{{$query->lname}}</td>
                <td>{{$query->address}}</td>
                <td>{{$query->subject}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>


            <div class="all-subscribers" id="subscribers">
            <table class="all-user">
        <thead>
            <tr>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subs as $sub)
            <tr>
                <td>{{$sub->email}}</td>
            </tr>

            @endforeach

               

        </tbody>
    </table>
    <Button class="submit-btn ">Copy</Button>
            </div>
            <div class="all-feedbacks" id="blogs">
            <table class="all-user">
        <thead>
            <tr>
                <th>Blog Image</th>
                <th>Blog Title</th>
                <th>Blog Content</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blog as $blogs)
          <tr>
            <td>
            <img src="{{$blogs->blogimg}}" alt="{{$blogs->blogimg}}">
            </td>
            <td>
                {{$blogs->blogtitle}}
            </td>
            <td>
                {{$blogs->blogcontent}}
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    <form action="post_blog" method="post" enctype="multipart/form-data">
    @csrf <!-- CSRF protection -->
        <label for="blogimg">Blog Image:</label><br>
        <input type="file" id="blogimg" name="blogimg" class="input-field" accept="image/png, image/jpeg" required><br>
        
        <label for="blogtitle">Blog Ttile :</label><br>
        <input type="text" id="blogtitle" name="blogtitle" class="input-field" required><br>
        
        <label for="blogcontent">Blog Content:</label><br>
        <textarea id="blogcontent" name="blogcontent" class="input-field" required></textarea><br>
        
        <input type="submit" value="Post" class="submit-btn">
    </form>
            </div>
            </div>
</div>
<script>
    // Get references to the input elements
    var input1 = document.getElementById('categoryName');
    var input2 = document.getElementById('id');
    // Add an event listener to input1
    input1.addEventListener('input', function() {
        // Update the value of input2 whenever input1 changes
        input2.value = input1.value;
    });
</script>
<script>
function collapse() {
    var btn_text = document.getElementsByClassName('x-dash-btn');
    var _btn = document.getElementsByClassName('dash-btn');

        for (var i = 0; i < btn_text.length; i++) {
            btn_text[i].style.display = "none";
            _btn[i].style.width = '30%';
    }
}

</script>
<script>
    // Check if the screen width is less than a certain threshold
    function checkScreenWidth() {
        var screenWidth = window.innerWidth;
        var desktopWidthThreshold = 1115; // Adjust this threshold as needed

        if (screenWidth < desktopWidthThreshold) {
            // Redirect the user to a different page
            window.location.href = "{{url('redirect')}}"; // Change this to the mobile page URL
        }
    }

    // Call the function on page load
    window.onload = checkScreenWidth;
</script>
<script>
    function showdive(div1,div2,div3,div4,div5,div6,div7,div8,div9,div10,div11){
        //The div to be displayed
        document.getElementById(div1).style.display = "block";
        //The div to be hidden
        document.getElementById(div2).style.display = "none";
        document.getElementById(div3).style.display = "none";
        document.getElementById(div4).style.display = "none";
        document.getElementById(div5).style.display = "none";
        document.getElementById(div6).style.display = "none";
        document.getElementById(div7).style.display = "none";
        document.getElementById(div8).style.display = "none";
        document.getElementById(div9).style.display = "none";
        document.getElementById(div10).style.display = "none";


    }
</script>



</body>
</html>