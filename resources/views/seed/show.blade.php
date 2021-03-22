@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["seed"]->getName() }}</div>
                <div class="card-body">
                    <b>@lang('seed.productName')</b> {{ $data["seed"]->getName() }}<br />
                    <b>@lang('seed.productSeller')</b> {{ $data["seed"]->getSeller() }}<br /><br />
                    <b>@lang('seed.productPrice')</b> {{ $data["seed"]->getPrice() }}<br /><br />
                    <b>@lang('seed.productCategories')</b> {{ $data["seed"]->getCategories() }}<br /><br />
                    <b>@lang('seed.productKeywords')</b> {{ $data["seed"]->getKeywords() }}<br /><br />
                </div>
            </div>
            <form method="POST" action="{{ route('cart.add',['id' => $data['seed']->getId()])}}">
                @csrf
                <input  placeholder="Quantity" required type="number" name="quantity" value="1" min="1" max="100" step="1"/>
                <input type="submit" value ="@lang('seed.add')" >
            </form>
        </div>
    </div>
</div>
@endsection
