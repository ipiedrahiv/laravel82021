<!-- Isabel Piedrahita -->
<!-- Santiago Santacruz-->
@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('admin') }}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 padding-20">
            <div class="card">
                <div class="card-header">@lang('admin.admin')</div>

                <div class="card-body">
                    @lang('admin.welcome')
                   <br /><br />
                   <a href="{{route('admin.create')}}">@lang('admin.create')</a>
                   <br /><br />
                   <a href="{{route('admin.list')}}">@lang('admin.list')</a>
                   <br /><br />
                   <a href="{{route('admin.order')}}">@lang('admin.orderList')</a>
                   <br /><br />
                   <a href="{{route('admin.download')}}">@lang('admin.listSeller')</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
