@extends('layouts.main')
@section('title','home')

@section('content')
	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
                        @foreach($products as $product)
                        
						<!-- Product -->
                        @php
                                $image = '';
                                if(count($product->images) > 0){
                                    $image = $product->images[0]['img'];
                                } else {
                                    $image = 'no_image.png';
                                }
                        @endphp
                        
                            <div class="product">
                                <div class="product_image"><img src="images/{{$image}}" alt="{{$product->title}}"></div>
                                <div class="product_extra product_new"><a href="{{route('showCategory',$product->category['alias'])}}">{{$product->category['title']}}</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="{{route('showProduct',[$product->category['title'],$product->id])}}">{{ $product->title }}</a></div>
                                    <div class="product_price">{{$product->price}} ₽</div>
                                </div>
                            </div>
                        @endforeach

					</div>
						
				</div>
			</div>
		</div>
	</div>



	<!--  -->
@endsection
	

	

	