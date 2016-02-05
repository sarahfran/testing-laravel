@extends('master')

@section('content')

	<h1>Products</h1>

	<a href="/products/create">Add new Product</a>

	<h1>What's Hot right now</h1>

	@foreach($mostPopularProducts as $product)
		<p>{{ $product }}</p>
	@endforeach

	<h2>Most Popular Products</h2>

	@foreach($products as $product)
		<p><a href="/products/{{ $product->id }}">{{ $product->name }}</a></p>
	@endforeach

@endsection