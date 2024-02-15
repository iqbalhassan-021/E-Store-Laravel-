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
    
    <title>Admin</title>
</head>
<body>

<div class="admin-panel disp-row">

        <div class="nav-panel">
            <div class="sticky">
            <p class="tagline">
                <strong>
                    Store Name
                </strong>
            </p>
            <button class="dash-btn" id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-gauge"></i>
                 <span class="x-dash-btn" id="x-dash-btn">Dashboard</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-store"></i>
                <span class="x-dash-btn " id="x-dash-btn">Edit Store</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-brands fa-slideshare"></i>
                <span class="x-dash-btn" id="x-dash-btn">Slider</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-user"></i>
                <span class="x-dash-btn" id="x-dash-btn">Edit Profile</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-list"></i>
                <span class="x-dash-btn" id="x-dash-btn">Categories</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-brands fa-product-hunt"></i>
                <span class="x-dash-btn">Products</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-border-all"></i>
                <span class="x-dash-btn" id="x-dash-btn">New Orders</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-user"></i>
                <span class="x-dash-btn" id="x-dash-btn">Users</span>
                </p>
            </button>
            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-comment"></i>
                <span class="x-dash-btn" id="x-dash-btn">Feedbacks</span>
                </p>
            </button>

            <button class="dash-btn"  id="dash-btn">
                <p class="desc">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="x-dash-btn" id="x-dash-btn">Home</span>
                </p>
            </button>
            <button class="dash-btn collapse" id="collapse" onclick="collapse()">
                <p class="desc">
                <i class="fa-solid fa-circle-chevron-up fa-rotate-270"></i>
                <span class="x-dash-btn" id="x-dash-btn">collapse</span>
                </p>
            </button>
            </div>
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
                        <div class="tab-grid">
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                    <i class="fa-solid fa-user"></i>
                                </p>
                                <p class="desc">
                                Users
                                <span class="x-dash-btn">
                                <?php echo'0';?>
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
                                <?php echo'0';?>
                                </span>
                                </p>
                               
                            </div>
                            <div class="tab-caller disp-flex-col">
                                <p class="desc">
                                <i class="fa-brands fa-product-hunt"></i>
                                </p>
                                <p class="desc">
                                All Products
                                <span class="x-dash-btn">
                                <?php echo'0';?>
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
                                    <?php echo'0';?>
                                </span>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit-store">
            <form action="#" method="post" class="edit-store-form">
        <label for="storeName">Store Name:</label><br>
        <input type="text" id="storeName" name="storeName" class="input-field" required><br>
        
        
        <label for="facebookLink">Facebook Link:</label><br>
        <input type="url" id="facebookLink" name="facebookLink" class="input-field"><br>
        
        <label for="instagramLink">Instagram Link:</label><br>
        <input type="url" id="instagramLink" name="instagramLink" class="input-field"><br>
        
        <label for="whatsappLink">WhatsApp Link:</label><br>
        <input type="url" id="whatsappLink" name="whatsappLink" class="input-field"><br>
        
        <label for="linkedinLink">LinkedIn Link:</label><br>
        <input type="url" id="linkedinLink" name="linkedinLink" class="input-field"><br>
        
        <label for="storeAddress">Store Address:</label><br>
        <textarea id="storeAddress" name="storeAddress" class="input-field" required></textarea><br>
        
        <label for="storePhone">Store Phone Number:</label><br>
        <input type="tel" id="storePhone" name="storePhone" class="input-field" required><br>
        
        <label for="storeEmail">Store Email:</label><br>
        <input type="email" id="storeEmail" name="storeEmail" class="input-field" required><br>
        
        <input type="submit" value="Submit" class="submit-btn">
    </form>
            </div>
            <div class="edit-slides">
            <form action="#" method="post">
        <!-- Slide 1 -->
        <label for="slideTitle1">Slide 1 Title:</label><br>
        <input type="text" id="slideTitle1" name="slideTitle1" class="input-field" required><br>
        
        <label for="slideSubtitle1">Slide 1 Subtitle:</label><br>
        <input type="text" id="slideSubtitle1" name="slideSubtitle1" class="input-field" required><br>
        
        <label for="slideContent1">Slide 1 Content:</label><br>
        <textarea id="slideContent1" name="slideContent1" class="input-field" required></textarea><br>
        
        <label for="slideLink1">Slide 1 Link:</label><br>
        <input type="url" id="slideLink1" name="slideLink1" class="input-field"><br>
        
        <label for="slideImage1">Slide 1 Image:</label><br>
        <input type="file" id="slideImage1" name="slideImage1" class="input-field" accept="image/*" required><br>
        
        <!-- Slide 2 -->
        <label for="slideTitle2">Slide 2 Title:</label><br>
        <input type="text" id="slideTitle2" name="slideTitle2" class="input-field" required><br>
        
        <label for="slideSubtitle2">Slide 2 Subtitle:</label><br>
        <input type="text" id="slideSubtitle2" name="slideSubtitle2" class="input-field" required><br>
        
        <label for="slideContent2">Slide 2 Content:</label><br>
        <textarea id="slideContent2" name="slideContent2" class="input-field" required></textarea><br>
        
        <label for="slideLink2">Slide 2 Link:</label><br>
        <input type="url" id="slideLink2" name="slideLink2" class="input-field"><br>
        
        <label for="slideImage2">Slide 2 Image:</label><br>
        <input type="file" id="slideImage2" name="slideImage2" class="input-field" accept="image/*" required><br>
        
        <!-- Slide 3 -->
        <label for="slideTitle3">Slide 3 Title:</label><br>
        <input type="text" id="slideTitle3" name="slideTitle3" class="input-field" required><br>
        
        <label for="slideSubtitle3">Slide 3 Subtitle:</label><br>
        <input type="text" id="slideSubtitle3" name="slideSubtitle3" class="input-field" required><br>
        
        <label for="slideContent3">Slide 3 Content:</label><br>
        <textarea id="slideContent3" name="slideContent3" class="input-field" required></textarea><br>
        
        <label for="slideLink3">Slide 3 Link:</label><br>
        <input type="url" id="slideLink3" name="slideLink3" class="input-field"><br>
        
        <label for="slideImage3">Slide 3 Image:</label><br>
        <input type="file" id="slideImage3" name="slideImage3" class="input-field" accept="image/*" required><br>
        
        <input type="submit" value="Submit" class="submit-btn">
    </form>
            </div>
            <div class="edit-admin">
            <form action="#" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" class="input-field" required><br>
        
        <label for="password">New Password:</label><br>
        <input type="password" id="password" name="password" class="input-field" required><br>
        
        <label for="confirmPassword">Confirm New Password:</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" class="input-field" required><br>
        <label for="securityques">Your last pet was a?</label><br>
        <input type="text" id="securityques" name="securityques" class="input-field" required><br>
        
        <input type="submit" value="Update Account" class="submit-btn">
    </form>

            </div>
            <div class="new-categories">
            <table class="all-user">
        <thead>
            <tr>
                <th>Category No#</th>
                <th>Category Name</th>
                <th>Category Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample row, replace with dynamic data -->
            <tr>
                <td>Category 1</td>
                <td>Watchs</td>
                <td><img src="{{asset('assets/images/category_img_01.jpg')}}" alt="Category 1"></td>
                <td>
                    <button class="submit-btn ">Edit</button>
                    <button class="submit-btn warning">Remove</button>
                </td>
            </tr>
            <tr>
                <td>Category 2</td>
                <td>Shoes</td>
                <td><img src="{{asset('assets/images/category_img_02.jpg')}}" alt="Category 1"></td>
                <td>
                <button class="submit-btn ">Edit</button>
                   <button class="submit-btn warning">Remove</button>
                </td>
            </tr>
            <tr>
                <td>Category 3</td>
                <td>Glasses</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Category 1"></td>
                <td>
                <button class="submit-btn ">Edit</button>
                   <button class="submit-btn warning">Remove</button>
                </td>
            </tr>
            </tbody>
    </table>
            <form action="#" method="post">
        <label for="categoryName">Category Name:</label><br>
        <input type="text" id="categoryName" name="categoryName" class="input-field" required><br>
        
        <label for="categoryImage">Category Image:</label><br>
        <input type="file" id="categoryImage" name="categoryImage" class="input-field" accept="image/*" required><br>
        
        <input type="submit" value="Add Category" class="submit-btn">
    </form>
            <!-- Add more rows as needed -->

            </div>
            <div class="edit-products">
            <table class="all-user">
        <thead>
            <tr>
                <th>Product NO#</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Code</th>
                <th>Product Description</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample row, replace with dynamic data -->
            <tr>
                <td>#1</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>Product 1</td>
                <td>$10.00</td>
                <td>P001</td>
                <td>Description of Product 1</td>
                <td>Glasses</td>
                <td>
                <button class="submit-btn ">Edit</button>
                   <button class="submit-btn warning">Remove</button>
                </td>
            </tr>
            <tr>
                <td>#1</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>Product 1</td>
                <td>$10.00</td>
                <td>P001</td>
                <td>Description of Product 1</td>
                <td>Glasses</td>
                <td>
                <button class="submit-btn ">Edit</button>
                   <button class="submit-btn warning">Remove</button>
                </td>
            </tr>
            <tr>
                <td>#1</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>Product 1</td>
                <td>$10.00</td>
                <td>P001</td>
                <td>Description of Product 1</td>
                <td>Glasses</td>
                <td>
                <button class="submit-btn ">Edit</button>
                   <button class="submit-btn warning">Remove</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <form action="#" method="post">
        <label for="productImage">Product Image:</label><br>
        <input type="file" id="productImage" name="productImage" class="input-field" accept="image/*" required><br>
        
        <label for="productName">Product Name:</label><br>
        <input type="text" id="productName" name="productName" class="input-field" required><br>
        
        <label for="productPrice">Product Price:</label><br>
        <input type="number" id="productPrice" name="productPrice" class="input-field" min="0" required><br>
        
        <label for="productCode">Product Code:</label><br>
        <input type="text" id="productCode" name="productCode" class="input-field" required><br>
        
        <label for="productDescription">Product Description:</label><br>
        <textarea id="productDescription" name="productDescription" class="input-field" required></textarea><br>
        
        <label for="productCategory">Category:</label><br>
        <input type="text" id="productCategory" name="productCategory" class="input-field" required><br>
        
        <input type="submit" value="Add Product" class="submit-btn">
    </form>
            </div>
            <div class="new-orders">
                <table  class="all-user">
            <thead>
            <tr>
                <th>Username</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample row, replace with dynamic data -->
            <tr>
                <td>User1</td>
                <td>123 Main St</td>
                <td>555-123-4567</td>
                <td>Product 1</td>
                <td>P001</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>
                <button class="submit-btn ">Aprove</button>
                   <button class="submit-btn warning">Remove</button>   
                </td>
            </tr>
            <tr>
                <td>User1</td>
                <td>123 Main St</td>
                <td>555-123-4567</td>
                <td>Product 1</td>
                <td>P001</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>
                <button class="submit-btn ">Aprove</button>
                   <button class="submit-btn warning">Remove</button>   
                </td>
            </tr>
            <tr>
                <td>User1</td>
                <td>123 Main St</td>
                <td>555-123-4567</td>
                <td>Product 1</td>
                <td>P001</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>
                <button class="submit-btn ">Aprove</button>
                   <button class="submit-btn warning">Remove</button>   
                </td>
            </tr>
            <tr>
                <td>User1</td>
                <td>123 Main St</td>
                <td>555-123-4567</td>
                <td>Product 1</td>
                <td>P001</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>
                <button class="submit-btn ">Aprove</button>
                   <button class="submit-btn warning">Remove</button>   
                </td>
            </tr>
            <tr>
                <td>User1</td>
                <td>123 Main St</td>
                <td>555-123-4567</td>
                <td>Product 1</td>
                <td>P001</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>
                <button class="submit-btn ">Aprove</button>
                   <button class="submit-btn warning">Remove</button>   
                </td>
            </tr>
            <tr>
                <td>User1</td>
                <td>123 Main St</td>
                <td>555-123-4567</td>
                <td>Product 1</td>
                <td>P001</td>
                <td><img src="{{asset('assets/images/category_img_03.jpg')}}" alt="Product 1"></td>
                <td>
                <button class="submit-btn ">Aprove</button>
                   <button class="submit-btn warning">Remove</button>   
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
            </div>
            <div class="all-userstable">
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
            <!-- Sample row, replace with dynamic data -->
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
                <td>123 Main St, City, Country</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
                <td>123 Main St, City, Country</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
                <td>123 Main St, City, Country</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
                <td>123 Main St, City, Country</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
            </div>
            <div class="all-fedbacks">
            <table class="all-user">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Phone Number or Email</th>
                <th>Feedbacks</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample row, replace with dynamic data -->
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
                <td>I recently purchased the [Product Name] from [E-commerce Platform]. Overall, I am quite satisfied with my purchase and would like to share my experience with other potential buyers.</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
              
                <td>I recently purchased the [Product Name] from [E-commerce Platform]. Overall, I am quite satisfied with my purchase and would like to share my experience with other potential buyers.</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
              
                <td>I recently purchased the [Product Name] from [E-commerce Platform]. Overall, I am quite satisfied with my purchase and would like to share my experience with other potential buyers.</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>johndoe123</td>
                <td>john@example.com</td>
              
                <td>I recently purchased the [Product Name] from [E-commerce Platform]. Overall, I am quite satisfied with my purchase and would like to share my experience with other potential buyers.</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
            </div>
            </div>
</div>
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
</body>
</html>