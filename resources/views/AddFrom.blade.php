AddForm PAGE
@extends('layout')

@section('content')
    <form action = "{{route('product.store')}}" method = "POST">
        @csrf
        <table>
            <tr>
                <tr>ADD Product:</tr><p></p>
                <tr><input type='text' name='product_title' placeholder="title"/></tr><p></p>
                <tr><input type='text' name='product_description' placeholder="description"/></tr><p></p>
                <tr><input type='number' name='product_price' placeholder="price"/></tr><p></p>
                <tr><input type='number' name='product_amount' placeholder="amount"/></tr><p></p>
                <tr><input type='number' name='product_categories_id' placeholder="categories_id"/></tr><p></p>
                <tr><input type = 'submit' value = "Add product"/></tr>
            </tr>
        </table>
    </form>
@endsection
