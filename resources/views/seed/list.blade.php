@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">

    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                @foreach($data["seeds"] as $seed)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('seed.show',$seed->getId())}}"> {{ $seed->getName()}}: </a>
                        <a>
                            @if($loop->index == 0 || $loop->index== 1)
                                <b>@lang('seed.id')  {{ $seed->getId() }}</b><br/>
                            @else
                                @lang('seed.id')  {{ $seed->getId() }}<br/>
                            @endif
                                @lang('seed.name')  {{ $seed->getName() }}<br/>
                                @lang('seed.price')  {{ $seed->getPrice() }}<br/>

                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
