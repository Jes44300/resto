 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @foreach(Auth()->user()->orders as $order)
                        <div class="card">
                            <div class="card-header">
                            Commande passé le {{ Carbon\Carbon::parse($order->payment_created_at)->format('d/m/Y a H:i ') }}
                                d'un montant de  <strong> {{ getprice($order->amount) }}</strong>
                            
                            </div>
                            <div class="card-body">
                            <h6> Voici les produits </h6>
                                @foreach(unserialize($order->products) as $product)
                                
                            
                                @endforeach
                            </div>
                        
                        </div>
                     
                    
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
