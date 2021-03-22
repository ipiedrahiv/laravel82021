@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">

    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                @foreach($data["seeds"] as $seed)
                    <li class="nav-item">
                        <a>
                            @if($seed->getStock() != 0)
                                <a class="nav-link" href="{{route('seed.show',$seed->getId())}}"> {{ $seed->getName()}}: </a>
                            @else
                                <a class="nav-link" href="{{route('seed.show',$seed->getId())}}" style="color:red;"> {{ $seed->getName()}}: </a>
                            @endif
                                @lang('seed.seller') {{ $seed->getSeller() }}<br/>
                                @lang('seed.price') {{ $seed->getPrice() }}<br/>

                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
