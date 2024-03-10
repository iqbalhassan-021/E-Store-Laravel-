
<div class="slider" id="slider">
    <div class="body-cover">
        <div class="slide-warpper disp-flex-row hero-slider">
        @foreach($slider as $slidercontent)  
        <div class="slide-container disp-flex-row">
                <div class="the-content disp-flex-col">
                    <div class="slide-text">
                    <p class="title">
                        <strong>
                            {{$slidercontent->slideproductName}}
                        </strong>
                    </p>
                    <p class="tagline">
                    {{$slidercontent->id}}
                    </p>
                    <p class="desc">
                    {{$slidercontent->slideproductDesc}}
                    </p>
                    <a href="{{url('/product/'.$slidercontent->id)}}" class="no-decoration link">
                        Learn more
                    </a>
                    </div> 
                </div>
                <div class="slider-image disp-flex-row">
                    <img src=" {{$slidercontent->slideproductIMG}}" alt="banner image">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>