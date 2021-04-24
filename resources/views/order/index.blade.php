<!-- Santiago Santacruz-->
@extends('layouts.app')

@section("title", $data["title"])

@section('content')

</br></br>
<div class="container" id="principal">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul id="errors">
                @foreach($data["orders"] as $order)
                    <div class="card">
                        <a>
                            <div class="card-header"><a class="nav-link" href="{{route('order.show',$order->getId())}}"> @lang('order.id') {{ $order->getId()}} </a></div>
                            <div class="card-body">
                                @lang('order.total') {{ $order->getTotal()}}
                            </div>
                        </a>  
                    </div>
                    </br>            
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
