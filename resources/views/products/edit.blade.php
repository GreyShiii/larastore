@extends('layouts.app')

@section('content')
    <h2>Edit: {{ $product->name }}</h2>

    <form action="{{ route('products.update', $product)}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
        </div>

        <div>
            <label for="">Description</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <label for="">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
        </div>

        <div>
            <label for="">Stock</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">
        </div>
        <button type="submit">Update Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
