@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        Products in Cart
            <ul id="errors">
            
                @foreach($data["seeds"] as $seed)
                    <li>
                    {{ $seed->getId() }} - {{ $seed->getName() }} : {{ $seed->getPrice() }}
                    </li>
                @endforeach
            </ul>
            <br />
            Total in cart: {{ $data['total'] }}<br /><br />
            <a href="{{ route('cart.buy') }}">Buy</a>
            <br /><br />
            <a href="{{ route('cart.removeAll') }}">Remove all products from cart</a>
        </div>
    </div>
</div>
@endsection