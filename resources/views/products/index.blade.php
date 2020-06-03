@extends('layouts.master')


@section ('content') 


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('ginad_theme/img/pexels-photo-219598.jpeg')}}"alt="img1">
       <div class="carousel-caption d-none d-md-block">
        <h1>BEST WINTER COLLECTION</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
         <button class="btn btn-info btn-lg">Shop Now</button>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('ginad_theme/img/pexels-photo-573271.jpeg')}}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>BEST WINTER COLLECTION</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
         <button class="btn btn-info btn-lg">Shop Now</button>
       </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block">
	<div class="container">
		<div class="row">
			<div class="col-md-4 m-right">
				<h4>FREE SHIPPING</h4>
				<p>On all orders over 90$</p>
			</div>
			
			<div class="col-md-4 m-right">
			  <h4>CALL US ANYTIME</h4>
			  <p>+91 7396403672</p>
			</div>
			
			<div class="col-md-4">
			  <h4>OUR LOCATION</h4>
			  <p>On all orders over 90$</p>
		  </div>
		</div>
	</div>
</div>










	 
	
	<!-- Objectif a atteindre  -->
	
	
<div class="container-fluid bg-light-gray pt-5 pb-5">

<div class="container mt-0">
	<div class="row">
		<h4> Produits </h4>
	</div>
	<div class="row">
		<div class="underline"></div>
	</div>
</div>
@foreach($products as $product)
<div class="container mt-5">
	<div class="row">
		
		<div class="col-md-3">
			<div class="card">
			    <small class="d-inline-block mb-2">
					@foreach($product->categories as $category)
					{{ $category->name }}
					@endforeach
				</small>
				<img src="{{ 'storage/' . $product->image }}" class="card-img-top">
				<div class="card-body">
					<h4>{{ $product->title }}</h4>
					<h6> {{ $product->getprice() }}</h6>
					 
					<a href="{{ route('products.show' , $product->slug) }}" class="btn btn-primary"> Voir l'article </a>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

</div>


	
	
	
	{{ $products->appends(request()->input())->links() }}
@endsection 



