@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<br/><br/>
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
                </div>
            </div>
            <br/><br/>
            <a href="{{ route('cart.add', ['id' => $data['seed']->getId()])}}" class= "btn btn-warning"> Add </a>
            <br/><br/>
            @guest
                Sign in to comment.
            @endguest
            @auth
            <form method="POST" action="{{ route('review.save') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="rating" name="rating" value="{{ old('rating') }}" />
                <input type="text" placeholder="Enter comment" name="comment" value="{{ old('comment') }}" />
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="seed_id" value="{{  $data["seed"]->getId() }}">
                <input type="file" placeholder="Select image" name="image" value="{{ old('image') }}" />
                <input type="submit" value="Send" />
            </form>
            @endauth
            @foreach($data["seed"]->reviews as $review)
            <br /><br />
            <div class="card">
                <div class="card-header">{{ $review->user->name }}</div>
                <div class="card-body">
                    {{ $review->getComment() }}
                    <br/><br/>
                    <img src="{{ asset('/img/'.$review->getImage()) }}">
                </div>
            </div>
            @endforeach
            <br/><br/>
        </div>
    </div>
</div>
@endsection
