EdingForm PAGE
@extends('layout')

@section('content')
    <form action = "{{route('product.update',$product)}}" method = "post">
        @csrf
        @method('PUT')
        <table>
            <tr>
            <tr>Eding Product:</tr><p></p>
            <tr><input type='text' name='product_title' placeholder="title" value="{{$product->product_title}}"/></tr><p></p>
            <tr><input type='text' name='product_description' placeholder="description" value="{{$product->product_description}}"/></tr><p></p>
            <tr><input type='text' name='product_price' placeholder="price" value="{{$product->product_price}}"/></tr><p></p>
            <tr><input type='text' name='product_amount' placeholder="amount" value="{{$product->product_amount}}"/></tr><p></p>
            <tr><input type='text' name='product_categories_id' placeholder="categories_id" value="{{$product->product_categories_id}}"/></tr><p></p>
            <tr>
                <button type = 'submit'>Edit</button>
            </tr>
        </table>
    </form>
@endsection
