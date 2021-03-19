@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["seed"]->getName() }}</div>
                <div class="card-body">
                    <b>Product name:</b> {{ $data["seed"]->getName() }}<br />
                    <b>Product seller:</b> {{ $data["seed"]->getSeller() }}<br /><br />
                    <b>Product price:</b> {{ $data["seed"]->getPrice() }}<br /><br />
                    <b>Product categories:</b> {{ $data["seed"]->getCategories() }}<br /><br />
                    <b>Product keywords:</b> {{ $data["seed"]->getKeywords() }}<br /><br />
                </div>
            </div>
            <a href="{{ route('cart.add', ['id' => $data['seed']->getId()])}}" class= "btn btn-warning"> Add </a>
        </div>
    </div>
</div>
@endsection
