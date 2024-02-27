<div class="categories" id="categories">
    <div class="body-cover">
        <div class="heading disp-flex-col">
            <p class="tagline">
                Categories of The Month
            </p>
            <br>
            <p class="desc">
            "In e-commerce, electronics, fashion, home essentials, beauty products, and health items are among the top-selling categories. These reflect diverse consumer interests, ranging from tech gadgets to self-care products, shaping the landscape of online shopping."
            </p>
            <div class="categories-wrapper disp-flex-row">
                <div class="categories-grid">
                    @foreach($producttype as $type)
                    <div class="categories-card disp-flex-col">
                        <a href="#">
                            <img src="{{$type->categoryImage}}" alt="category_img_01" class="cat-img">
                        </a>
                        <br>
                        <p class="tagline">
                        {{$type->categoryName}}
                        </p>  
                        <br>
                        <a href="/" class="go shop no-decoration">
                            <p class="">
                                See Products
                            </p>
                        </a>      
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>