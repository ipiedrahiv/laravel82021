<!-- Isabel Piedrahita -->
@extends('admin.index')

@section("title", $data["seed"]->getName())

@section('content')
    @parent

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["seed"]->getName() }}</div>
                <div class="card-body">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <b>@lang('seed.productName')</b> {{ $data["seed"]->getName() }}<br /><br />
                        <b>@lang('seed.productSeller')</b> {{ $data["seed"]->getSeller() }}<br /><br />
                        <b>@lang('seed.productPrice')</b> {{ $data["seed"]->getPrice() }}<br /><br />
                        <b>@lang('seed.productStock')</b> {{ $data["seed"]->getStock() }}<br /><br />
                        <b>@lang('seed.productCategories')</b> {{ $data["seed"]->getCategories() }}<br /><br />
                        <b>@lang('seed.productKeywords')</b> {{ $data["seed"]->getKeywords() }}<br /><br />
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <b>@lang('seed.productImage')</b> <img src="{{ asset('/img/'.$data['seed']->getImage()) }}"><br /><br />
                    </div>
                    <button class="button">
                        <a href="{{route('admin.delete', $data['seed']->getId())}}">@lang('admin.delete')</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>
@endsection
