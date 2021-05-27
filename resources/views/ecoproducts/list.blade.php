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
                    ID: {{$item['id']}}<br/>
                    Price: {{$item['price']}}<br/>
                    Facts: {{$item['facts']}}<br/>
                    Description: {{$item['description']}}<br/>
                    Emision: {{$item['emision']}}<br/>
                    Product Life: {{$item['product_life']}}<br/>
                    Categories: {{$item['categories']}}<br/>
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
