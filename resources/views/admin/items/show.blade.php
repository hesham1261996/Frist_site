
@extends('include.head')
@include('include.navigation')
@section('content')
<!-- Content body -->
<div class="content-body">
    <div class="content">
        <main class="container">
        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img data-image="black" src="{{asset('images')}}/black.png" alt="">
            <img data-image="blue" src="{{asset('images')}}/blue.png" alt="">
            <img data-image="red"  src="{{asset('images')}}/red.png" alt="">

            @if ($item->photo)
                <img  class="active" src="{{asset('images')}}/{{$item->photo->filename}}" alt="">
            @else
                <img  class="active" src="{{asset('images')}}/defoult.jpg" alt="">
            @endif
            
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
            <span>{{$item->category->title}}</span>
            <h1>{{$item->title}}</h1>
            <p>{{$item->descriptoin}}</p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

            <!-- Product Color -->
            <div class="product-color">
                <span>Color</span>

                <div class="color-choose">
                <div>
                    <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                    <label for="red"><span></span></label>
                </div>
                <div>
                    <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                    <label for="blue"><span></span></label>
                </div>
                <div>
                    <input data-image="black" type="radio" id="black" name="color" value="black">
                    <label for="black"><span></span></label>
                </div>
                </div>

            </div>

            <!-- Cable Configuration -->
            <div class="cable-config">
                <span>Cable configuration</span>

                <div class="cable-choose">
                <button>Straight</button>
                <button>Coiled</button>
                <button>Long-coiled</button>
                </div>

                <a href="#">How to configurate your headphones</a>
            </div>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
            <span>{{$item->price}}$</span>
            <a href="#" class="cart-btn">Add to cart</a>
            </div>
        </div>
        </main>
    </div>
</div>