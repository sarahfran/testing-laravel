@extends('master')

@section('content')

<h1>Edit: {{ $product->name }}</h1>

{{ Form::model( $product ) }}
{{ Form::text('name') }}
{{ Form::submit() }}
{{Form::close() }} 

@endsection