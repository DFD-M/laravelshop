@extends('layouts.main')

@section('title', $item->title)
@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/product.css">
    <link rel="stylesheet" type="text/css" href="/styles/product_responsive.css">
@endsection



@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(/images/categories.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title"><span>.</span></div>
                                <div class="home_text"><p>.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        @php
                            $image = '';
                            if(count($item->images) > 0){
                                $image = $item->images[0]['img'];
                            } else {
                                $image = 'no_image.png';
                            }
                        @endphp
                        <div class="details_image_large"><img src="/images/{{$image}}" alt="{{$item->title}}"><div class="product_extra product_new"><a href="{{route('showCategory',$item->category['alias'])}}">{{$item->category['title']}}</a></div></div>
                        <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                            @if($image == 'no_image.png')

                            @else
                                @foreach($item->images as $img)
                                    @if($loop->first)
                                        <div class="details_image_thumbnail active" data-image="/images/{{$img['img']}}"><img src="/images/{{$img['img']}}" alt="{{$item->title}}"></div>
                                    @else
                                        <div class="details_image_thumbnail" data-image="/images/{{$img['img']}}"><img src="/images/{{$img['img']}}" alt="{{$item->title}}"></div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name" data-id="{{$item->id}}">{{$item->title}}</div>
                       
                            <div class="details_price">{{$item->price}} ₽</div>
                        

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Наличие:</div>
                            @if($item->in_stock)
                                <span>В наличии</span>
                            @else
                                <span style="color: #cc0000">Отсутствует</span>
                            @endif
                        </div>
                        <div class="details_text">
                            <p>{{$item->description}}</p>
                        </div>

                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                        @if(Auth::user())
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$item->id) }}" class="btn btn-warning btn-block text-center" role="button">Добавить в корзину </a> </p>
                        @else
                       <a href="{{ url('login') }}" class="btn btn-danger" role="button" >Пожалуйста войдите в свой аккаунт</a>
                        @endif 
                        </div>
                        
                       
                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Description</div>
                        
                    </div>
                    <div class="description_text">
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    
    

    <!-- Newsletter -->

    
@endsection
