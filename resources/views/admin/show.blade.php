@extends('layouts.app')
@extends('admin.index')

@section("title", $data["seed"]->getName())

@section('content')
    @parent

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["seed"]->getName() }}</div>
                <div class="card-body">
                    <b>Product name:</b> {{ $data["seed"]->getName() }}<br /><br />
                    <b>Product seller:</b> {{ $data["seed"]->getSeller() }}<br /><br />
                    <b>Product price:</b> {{ $data["seed"]->getPrice() }}<br /><br />
                    <b>Product categories:</b> {{ $data["seed"]->getCategories() }}<br /><br />
                    <b>Product keywords:</b> {{ $data["seed"]->getKeywords() }}<br /><br />
                    <b>Product image:</b> <img src="{{ asset('/img/'.$data["seed"]->getImage()) }}"><br /><br />
                    <button class="button">
                        <a href="{{route('admin.delete', $data["seed"]->getId())}}">Delete</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>
@endsection
