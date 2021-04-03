@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">

    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                @foreach($data["orders"] as $order)
                    <li class="nav-item">
                        <a>
                            <a class="nav-link" href="{{route('order.show',$order->getId())}}">  {{ $order->getId()}} </a>
                            - {{ $order->getTotal()}}
                        </a>
                    </li>
                @endforeach
                <a href="{{route('order.excel')}}">Download Orders</a>
            </ul>
        </div>
    </div>
</div>
@endsection