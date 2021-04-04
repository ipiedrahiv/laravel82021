@extends('layouts.app')

@section("title", $data["title"])

@section('content')
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
         <h3 class="pdf-name">@lang('order.receipt')</h3><button type="button" class="open-pdf" onclick="displayEmbeddedPdf()"> @lang('order.print')</button>
        </div>
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <img class="img-fluid" src="{{ asset('/img/mascot.png') }}" alt="" />
        </div>
    </div>
</div>

@endsection