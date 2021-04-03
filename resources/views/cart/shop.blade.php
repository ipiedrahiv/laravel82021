@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @lang('cart.productsCart')
            <ul id="errors">
            
                @foreach($data["seeds"] as $seed)
                    <li>
                    {{ $seed->getId() }} - {{ $seed->getName() }} : {{ $seed->getPrice() }} - @lang('cart.quantity') {{$seed->getQuantity() }} 
                @endforeach
            </ul>
            <br />
            @lang('cart.total') {{ $data['total'] }}<br /><br />
            <a href="{{ route('cart.buy') }}">@lang('cart.buy')</a>
            <br /><br />
            <a href="{{ route('cart.removeAll') }}">@lang('cart.remove')</a>
        </div>
    </div>
</div>
@endsection