@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table id="ordertable">
                <tr>
                    <th>@lang('order.id')</th>
                    <th>@lang('order.product')</th>
                    <th>@lang('order.price')</th>
                    <th>@lang('order.quantity')</th>
                    <th>@lang('order.subtotal')</th>
                </tr>
                @foreach($data["orders"] as $order)
                    <tr>
                        <td>{{ $order->getId()}}</td>
                        @foreach($order->items as $item)

                            <td>{{ $item->getProductId() }}</td>
                            <td> 1000 </td>
                            <td>{{ $item->getQuantity()}}</td>
                            <td> {{ $item->getSubTotal()}}</td>
                            <tr></tr>
                            <td></td>
                            @endforeach
                    </tr>
                @endforeach
            </table>
            <button type="button" class="excel" onclick="tableToExcel('ordertable', 'Orders')">Print</button>
        </div>
    </div>
</div>
@endsection