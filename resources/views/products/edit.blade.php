@extends('layouts.app')

@section('content')
    <h2>Edit: {{ $product->name }}</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="">Description</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
            @error('description') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
            @error('price') <span>{{ $message }} </span> @enderror
        </div>

        <div>
            <label for="">Stock</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">
            @error('stock') <span>{{ $message }} </span> @enderror
        </div>
        <button type="submit">Update Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
