<!-- Santiago Santacruz-->
@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('buy') }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="center">
                <h3>@lang('cart.message')</h3>
                <img class="center" src="{{ asset('/img/shamin.png') }}" />
            </div>
        </div>
    </div>
</div>
@endsection
