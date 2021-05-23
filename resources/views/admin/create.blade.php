<!-- Isabel Piedrahita -->
@extends('admin.index')

@section("title", $data["title"])

@section('content')
   @parent'
{{ Breadcrumbs::render('create') }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">@lang('admin.create')</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('admin.save') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" />
                        <input type="text" placeholder="Enter seller" name="seller" value="{{ old('seller') }}" />
                        <input type="text" placeholder="Enter price" name="price" value="{{ old('price') }}" />
                        <input type="text" placeholder="Enter stock" name="stock" value="{{ old('stock') }}" />
                        <input type="text" placeholder="Enter keywords" name="keywords" value="{{ old('keywords') }}" />
                        <input type="text" placeholder="Enter categories" name="categories" value="{{ old('categories') }}" />
                        <input type="file" placeholder="Select image" name="image" value="{{ old('image') }}" />
                        <input type="submit" value="Send" />
                    </form>

                </div>
            </div>
        </div>
    </div>
    <br />
</div>
@endsection
