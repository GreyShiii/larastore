@extends('layouts.app')

@section('content')
    <h2>Add Product</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label for="">Description</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        </div>

        <div>
            <label for="">Stock</label>
            <input type="number" name="stock" value="{{ old('stock') }}">
        </div>
        <button type="submit">Create Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
