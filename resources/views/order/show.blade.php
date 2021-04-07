@extends('layouts.app')

@section("title", $data["title"])

@section('content')

</br></br>
<div class="container" id="principal">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @lang('order.id'){{$data["order"]->getId() }}</div>
                <div class="card-body">
                    @foreach($data["order"]->items as $item)
                    @lang('order.product') {{ $item->getProductId() }} - @lang('order.quantity') {{ $item->getQuantity()}} - @lang('order.subtotal') {{ $item->getSubTotal()}} <br />
                    @endforeach
                    @lang('order.total') {{$data["order"]->getTotal()}}
                </div>   
            </div>
        </div>
        <div class="parent-container">
            <h3> @lang('order.download')</h3>
            <a class="btn btn-primary btn-lg active" href="{{route('order.download',['id' => $data['order']->getId()])}}"> @lang('order.open')</a>
        </div> 
    </div>
</div>
</br></br>
@endsection
