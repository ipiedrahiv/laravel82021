@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('home') }}
<section class="page-section goShop" id="goShop">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <img class="img-fluid" src="{{ asset('/img/mascot.png') }}" alt="" />
                </div>
            </div>
            <div class="col">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <h4 class="text-uppercase mb-4">@lang('home.about')</h4>
                    <p class="lead mb-0">
                        @lang('home.message')
                    </p>
                    <br/><br/>
                    <h2><a href="{{route('seed.list')}}" class="page-section-heading text-center text-uppercase text-secondary mb-0" >@lang('home.goStore')</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
