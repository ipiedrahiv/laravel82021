<!-- Isabel Piedrahita -->
@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                <form method="POST" action="{{ route('seed.search')}}">
                    @csrf
                    <input type="text" name="query" value="{{ old('query') }}"/>
                    <input type="submit" value ="@lang('seed.search')" >
                </form>
                @if($data["fromSearch"] == "True")
                    <a class="nav-link" href="{{route('seed.list')}}"> @lang('seed.returnFromSearch') </a>
                @endif
                <br/>
                <p>@lang('seed.outOfStock')</p>
                <p style="color:red;">@lang('seed.example')</p>
                @foreach($data["seeds"] as $seed)
                <div class="card">
                    <div class="card-header">
                        @if($seed->getStock() != 0)
                            <a class="nav-link" href="{{route('seed.show',$seed->getId())}}"> {{ $seed->getName()}}: </a>
                        @else
                            <a class="nav-link" href="{{route('seed.show',$seed->getId())}}" style="color:red;"> {{ $seed->getName()}}: </a>
                        @endif
                    </div>
                    <div class="card-body">
                                @lang('seed.seller') {{ $seed->getSeller() }}<br/>
                                @lang('seed.price') {{ $seed->getPrice() }}<br/>
                    </div>
                </div>
                <br/>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
