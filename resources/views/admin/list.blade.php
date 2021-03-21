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
                                <b>Seed ID : {{ $seed->getId() }}</b><br/>
                            @else
                                Seed Id : {{ $seed->getId() }}<br/>
                            @endif
                                Name : {{ $seed->getName() }}<br/>
                                Seller : {{ $seed->getSeller() }}<br/>
                                Price : {{ $seed->getPrice() }}<br/>
                                Categories : {{ $seed->getCategories() }}<br/>
                                Keywords : {{ $seed->getKeywords() }}<br/>
                                <button class="button">
                                    <a href="{{route('admin.delete', $seed->getId())}}">Delete</a>
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
