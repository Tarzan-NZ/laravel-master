@extends('layouts.master')

@section('title', 'Add a new staff member')
@section('meta-desc', 'Add a new staff member for the about page')

@section('content')

	<h1>Add a new staff member</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, sunt!</p>

	<form action="{{ url('about') }}" method="post">
		
		{{ csrf_field() }}

		<div>
			<label for="first_time">First Name*: </label>
			<input type="text" name="first_name" value="{{ old('first_name') }}">
			{{ $errors->first('first_name') }}
		</div>
		<div>
			<label for="last_name">Last Name*: </label>
			<input type="text" name="last_name" value="{{ old('last_name') }}">
			{{ $errors->first('last_name') }}
		</div>
		<div>
			<label for="age">Age: </label>
			<input type="number" name="age" value="{{ old('age') }}">
			{{ $errors->first('age') }}
		</div>

		<input type="submit" value="Add staff">

	</form>

{{-- 
	@if( count($errors) > 0 )
		<ul>
			@foreach ( $errors->all() as $error )
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
--}}



@endsection