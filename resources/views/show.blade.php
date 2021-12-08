Show PAGE
@extends('layout')

@section('content')
    <p><a href="{{route('product.index')}}">Go to table</a></p>
<ul>
    <li>ID: {{$product->products_id}}</li>
    <li>Title: {{$product->product_title}}</li>
    <li>Description: {{$product->product_description}}</li>
    <li>Price: {{$product->product_price}}</li>
    <li>Amount: {{$product->product_amount}}</li>
    <li>Categories ID: {{$product->product_categories_id}}</li>
</ul>
<a href="{{route('product.edit',$product->products_id)}}">Edit this</a>
@endsection
