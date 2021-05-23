<!-- Santiago Santacruz-->
@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('shop') }}
<br/><br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @include('util.message')
        @lang('cart.productsCart')
            <ul id="errors">
                @foreach($data["seeds"] as $seed)
                    <li>
                        {{ $seed->getId() }} - {{ $seed->getName() }} : {{ $seed->getPrice() }} - @lang('cart.quantity') {{$seed->getQuantity() }}  <a href="{{ route('cart.remove',['id' => $seed->getId()])}}">@lang('cart.remove')</a>
                    </li>
                @endforeach
            </ul>
            <br />
            @lang('cart.total') {{ $data['total'] }}<br /><br />
            <a href="{{ route('cart.buy') }}">@lang('cart.buy')</a>
            <br /><br />
            <a href="{{ route('cart.removeAll') }}">@lang('cart.removeAll')</a>
        </div>
    </div>
</div>
@endsection
