@extends('master')

@section('content')

<h1>{{ $product->name }}</h1>

<a href="/products/{{ $product->id }}/edit">Edit this product</a>
<p>{{ $product->description }}</p>

@if($product->stock)
	<?php $stock = $product->stock; ?>
@else
	<?php $stock = 'Out of stock'; ?>
@endif

<ul>
	<li>Price: ${{ $product->price }}</li>
	<li>Stock: {{ $product->stock }}</li>
</ul>

@endsection