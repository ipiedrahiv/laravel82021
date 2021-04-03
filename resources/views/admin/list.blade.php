@extends('layouts.app')
@extends('admin.index')

@section("title", $data["title"])

@section('content')
    @parent

<div class="container">

    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                @foreach($data["seeds"] as $seed)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.show',$seed->getId())}}"> {{ $seed->getName()}}: </a>
                        <a>
                            @if($loop->index == 0 || $loop->index== 1)
                                <b>@lang('seed.id') {{ $seed->getId() }}</b><br/>
                            @else
                                @lang('seed.id') {{ $seed->getId() }}<br/>
                            @endif
                                @lang('seed.name') {{ $seed->getName() }}<br/>
                                @lang('seed.seller') {{ $seed->getSeller() }}<br/>
                                @lang('seed.price') {{ $seed->getPrice() }}<br/>
                                @lang('seed.categories') {{ $seed->getCategories() }}<br/>
                                @lang('seed.keywords') {{ $seed->getKeywords() }}<br/>
                                <button class="button">
                                    <a href="{{route('admin.delete', $seed->getId())}}">@lang('admin.delete')</a>
                                </button>

                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <br />
</div>
@endsection
