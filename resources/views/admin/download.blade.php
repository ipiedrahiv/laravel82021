<!-- Santiago Santacruz-->
@extends('admin.index')

@section("title", $data["title"])

@section('content')
    @parent
{{ Breadcrumbs::render('download') }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table id="ordertable">
                <tr>
                    <th>@lang('seed.id')</th>
                    <th>@lang('seed.name')</th>
                    <th>@lang('seed.seller')</th>
                    <th>@lang('seed.stock')</th>    
                    <th>@lang('seed.price')</th>
                    <th>@lang('seed.categories')</th>
                </tr>
                @foreach($data["products"] as $product)
                    <tr>
                        <td>{{ $product->getId()}}</td>
                        <td>{{ $product->getName() }}</td>
                        <td>{{ $product->getSeller()}}</td>    
                        <td>{{ $product->getStock()}}</td>
                        <td>{{ $product->getPrice()}}</td>
                        <td>{{ $product->getCategories()}}</td>
                    </tr>
                @endforeach
            </table>
            <div class="parent-container">
            <h3 class="pdf-name">@lang('admin.excel')</h3><button type="button" class="open-pdf"  onclick="tableToExcel('ordertable', 'Orders')">@lang('admin.excel')</button>
            </div>
        </div>
    </div>
</div>
@endsection
