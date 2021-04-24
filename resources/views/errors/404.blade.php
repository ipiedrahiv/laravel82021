<!-- Santiago Santacruz-->
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="center">
                <h1>@lang('home.exception')</h1>
                <img class="center" src="{{ asset('/img/shaminMad.png') }}" />
                <h6>@lang('home.shamin')</h6>
            </div>
        </div>
    </div>
</div>
@endsection
