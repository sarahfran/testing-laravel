@extends('master')

@section('content')

	<h1>Add New Product</h1>

	<form action="/products/store" method="post">

		{!! csrf_field() !!}

		<div>
			<label for="name">Name: </label>
			<input type="text" value="{{ old('name') }}" id="name" name="name" placeholder="Smart Watch">
			@if( $errors->first('name') )
				<p>{{ $errors->first('name') }}</p>
			@endif
		</div>

		<div>
			<label for="description">Description: </label>
			<textarea name="description" id="description" col="30" rows="10" value="{{ old('description') }}"></textarea>
			@if( $errors->first('description') )
				<p>{{ $errors->first('description') }}</p>
			@endif
		</div>

		<div>
			<label for="price">Price: </label>
			<input type="number" step=".01" id="price" name="price" value="{{ old('price') }}">
			@if( $errors->first('price') )
				<p>{{ $errors->first('price') }}</p>
			@endif
		</div>

		<div>
			<label for="stock">Stock: </label>
			<input type="number" id="stock" name="stock">
		</div>

		<input type="submit" value="Add new product">

	
	</form>

@endsection