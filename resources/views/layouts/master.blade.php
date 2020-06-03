<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{ asset('ginad_theme/css/bootstrap4.css')}}">
<link rel="stylesheet" href="{{ asset('ginad_theme/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('ginad_theme/css/style.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title> Ginad Traiteur </title>
</head>

<body>
<div class="container-fluid bg-dark header-top d-none d-md-block">
  <div class="container">
    <div class="row text-light pt-2 pb-2">
      <div class="col-md-5"><i class="fa fa-envelope-o" aria-hidden="true"></i> debjyoti.das7@gmail.com</div>
      <div class="col-md-3">
        
      </div>
      
      @include('partials.auth') 
      <div class="col-md-2"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Ma Carte - {{ Cart::count() }}</div>
    </div>
  </div>
</div>


<div class="container-fluid bg-black">
  <nav class="container navbar navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand" href="#"> Navbar </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Logo <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Espace traiteur </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Restaurant 
        </a>
		@foreach(App\Category::all() as $category)
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('products.index', ['categorie' => $category->slug] )  }}"> {{ $category->name }} </a>
        </div>
		@endforeach
      </li>
      
    </ul>
    
		<a class="text-muted" href="#" aria-label="Search">
           @include('partials.search') 
          </a>
      
    </form>
  </div>
</nav>
</div>



@yield('content')




<div class="container-fluid pt-5 pb-5 bg-light-gray">
	<div class="container">
		<div class="row">
			<h4>TRENDS</h4>
		</div>
		<div class="row">
			<div class="underline-blue"></div>
		</div>
	</div>
	
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
				  <img src="img/pexels-photo-247206.jpeg" alt="img" class="card-img-top">
					<div class="card-body">
					  <h4>Denim Shirt</h4>
					  <h6>$67.87</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="img/pexels-photo-206454.jpeg" alt="img" class="card-img-top">
					<div class="card-body">
					  <h4>White Net</h4>
					  <h6>$67.87</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="img/pexels-photo-245931.jpeg" alt="img" class="card-img-top">
					<div class="card-body">
					  <h4>Purple Bra</h4>
					  <h6>$67.87</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="img/pexels-photo-206381.jpeg" alt="img" class="card-img-top">
					<div class="card-body">
					  <h4>Blue Skart</h4>
					  <h6>$67.87</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>


    
<footer>
	<div class="container-fluid pt-5 pb-5 bg-dark text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<div class="row">
					<h5>Meta</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
					
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Register</p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Log In</p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Enter RSS</p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Comments RSS</p>
						<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Webseotips</p>
					
				</div>
				
				
				<div class="col-md-3">
					<div class="row">
					<h5>Recent Posts</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
				<div class="row">
					<div class="media">
						<img src="img/b1.jpg" class="img-fluid" alt="media-image">
						<div class="media-body ml-2">
							<h6>Jackets For The Soul. What Color Is Yours?</h6>
						</div>
					</div>
				</div>
				
				<div class="row mt-3">
					<div class="media">
						<img src="img/b2.jpg" class="img-fluid" alt="media-image">
						<div class="media-body ml-2">
							<h6>Best Fabrics For Your Dream Dress!</h6>
						</div>
					</div>
				</div>
				</div>
				
				<div class="col-md-3 pl-4">
					<div class="row">
					<h5>About</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
				<div class="row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel inventore quis harum mollitia ex esse obcaecati deserunt alias fuga quia.<br>Vel inventore quis harum mollitia.</p>
				</div>
				</div>
				
				<div class="col-md-3">
					<div class="row">
					<h5>Tags</h5>
				</div>
				<div class="row mb-4">
				<div class="underline bg-light" style="width: 50px;"></div>
				</div>
				<button class="btn btn-outline-light">Autunm</button> <button class="btn btn-outline-light">Dress</button> <button class="btn btn-outline-light">Fashion</button> <button class="btn btn-outline-light">Ladice Dress</button> <button class="btn btn-outline-light">Black Dress</button>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js"> </script>

@yield('extra-js')

</body>
</html>
