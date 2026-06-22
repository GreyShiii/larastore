@extends('layouts.main')

@section('content')
    <h2>Add Product</h2>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="">Description</label>
            <textarea name="description">{{ old('description') }}</textarea>
            @error('description') <span>{{ $message }} @enderror</span>
        </div>

        <div>
            <label for="">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}">
            @error('price') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="">Stock</label>
            <input type="number" name="stock" value="{{ old('stock') }}">
            @error('stock') <span>{{ $message }} @enderror</span>
        </div>
        <button type="submit">Create Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
