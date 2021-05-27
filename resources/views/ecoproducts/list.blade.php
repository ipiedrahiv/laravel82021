@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row p-5">
        <div class="col-md-12">
            @foreach ($data["responseBody"] as $response)
                @foreach ($response as $item)
                <div class="card">
                    <div class="card-header">
                        Name: {{$item['name']}}<br/>
                    </div>
                    @lang('ecoproducts.id') {{$item['id']}}<br/>
                    @lang('ecoproducts.price') {{$item['price']}}<br/>
                    @lang('ecoproducts.facts') {{$item['facts']}}<br/>
                    @lang('ecoproducts.description') {{$item['description']}}<br/>
                    @lang('ecoproducts.emision') {{$item['emision']}}<br/>
                    @lang('ecoproducts.productLife') {{$item['product_life']}}<br/>
                    @lang('ecoproducts.categories') {{$item['categories']}}<br/>
                    </div>
                    <br/><br/>
                @endforeach
                <br/><br/>
            @endforeach
            <br/><br/>
        </div>
    </div>
</div>

@endsection
