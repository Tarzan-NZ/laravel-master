@extends('layouts.master')

@section('content')

	<h1>Edit: {{$staffMember->first_name }} {{$staffMember->last_name }}</h1>

	<form action="{{ url('about/'.$staffMember->slug) }}" method="psot">

		{{ csrf_field() }}

		<div>
			<label for="first_time">First Name*: </label>
			<input type="text" name="first_name" value="{{ $staffMember->first_name }}">
			{{ $errors->first('first_name') }}
		</div>
		<div>
			<label for="last_name">Last Name*: </label>
			<input type="text" name="last_name" value="{{ $staffMember->last_name }}">
			{{ $errors->first('last_name') }}
		</div>
		<div>
			<label for="age">Age: </label>
			<input type="number" name="age" value="{{ $staffMember->age }}">
			{{ $errors->first('age') }}
		</div>

		<input type="submit" value="Update staff">

	</form>
	
@endsection