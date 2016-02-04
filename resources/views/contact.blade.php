@extends('master')

@section('content')

	<h1>Contact Us</h1>

	<form action="/contact" method="post" >

		<div>
			<label for="email">Email: </label>
			<input type="email" name="email" placeholder="batman@batcave.com">
		</div>

		<div>
			<label for="message">Message: </label>
			<textarea name="message" id="message" cols="30" rows="10"></textarea>
		</div>
		
		<input type="submit" name="contact" value="send">

	</form>



@endsection
