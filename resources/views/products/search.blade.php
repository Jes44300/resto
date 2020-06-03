@extends('layout.master')


@section ('content') 

	 @foreach($products as $product)
	<div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <small class="d-inline-block mb-2">
		  @foreach($product->categories as $category)
		  {{ $category->name }}
		  @endforeach
		  </small>
			<h8 class="mb-0"> {{ $product->title }}</h8>
				<div class="mb-1 text-muted"> {{ $product->created_at->format('d/m/Y') }}</div>
					<h7 class="card-text mb-auto"> {{ $product->subtitle }} </h7>
					<strong class="card-text mb-auto"> {{ $product->getprice() }} </strong>
						<a href="{{ route('products.show' , $product->slug) }}" class="stretched-link btn btn-primary" > Voir l'article </a>
        </div>
        <div class="col-auto d-none d-lg-block">
			<img src="{{ 'storage/' . $product->image }}" alt=""/>
        </div>
      </div>
    </div>
	@endforeach
	{{ $products->appends(request()->input())->links() }}
@endsection 



