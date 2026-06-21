@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>

    <p>Price: ${{ number_format($product->price, 2) }}</p>
    <p>Stock:  {{ $product->stock }}</p>
    <p>Description: {{ $product->description ?? 'No Description provided.'}}</p>

    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <a href="{{ route('products.index') }}">Back</a>
@endsection
