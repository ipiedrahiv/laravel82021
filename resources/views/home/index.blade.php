@extends('layouts.app')

@section('content')
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
                    <h4 class="text-uppercase mb-4">About us:</h4>
                    <p class="lead mb-0">
                        This web page is exclusively an academic endeavor! Pleas don't actually
                        believe that you can buy seeds from us, we don't have any seeds. But you
                        are more than welcome to check out our wonderful selection of fake seeds.
                    </p>
                    <br/><br/>
                    <h2><a href="{{route('home.index')}}" class="page-section-heading text-center text-uppercase text-secondary mb-0" >Go to store</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
