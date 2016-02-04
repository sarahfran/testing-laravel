@extends('master')

@section('content')

	<h1>Products</h1>

	<h1>What's Hot right now</h1>

	@foreach($mostPopularProducts as $product)
		<p>{{ $product }}</p>
	@endforeach

	<h2>Most Popular Products</h2>

	@foreach($products as $product)
		<p>{{ $product['name'] }} at {{ $product['price'] }} each</p>
	@endforeach

@endsection