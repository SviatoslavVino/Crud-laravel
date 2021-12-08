INDEX PAGE
@extends('layout')

@section('content')

<table border="1">
    <caption>Table products</caption>
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>price</th>
        <th>amount</th>
        <th>eding link</th>
    </tr>
    </thead>
    @foreach($products as $product)
    <tr>
        <th><a href="{{route('product.show',$product)}}">{{$product->products_id}}</a></th>
        <th>{{$product->product_title}}</th>
        <th>{{$product->product_description}}</th>
        <th>{{$product->product_price.'$'}}</th>
        <th>{{$product->product_amount.' шт'}}</th>
        <th><a href="{{route('product.edit',$product)}}">Edit</a></th>
        <th>
            <form method="Post" action="{{route('product.destroy',$product)}}">
                @csrf
                @method('Delete')
                <button type="submit">Delete</button>
            </form>
        </th>
    </tr>
    @endforeach
</table>
<a href="{{route('product.create')}}">Add new product</a>
@endsection
