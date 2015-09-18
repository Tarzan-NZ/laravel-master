@extends('layouts.master')

@section('content')

	<h1>Edit: {{$staffMember->first_name }} {{$staffMember->last_name }}</h1>

	<form novalidate action="{{ url('about/'.$staffMember->slug) }}" method="post" enctype="multipart/form-data">

	<input type="hidden" name="_method" value="patch">

		{{ csrf_field() }}

		<div>
			<label for="first_time">First Name*: </label>
			<input type="text" name="first_name" value="{{ old('first_name') ? old('first_name') : $staffMember->first_name }}">
			{{ $errors->first('first_name') }}
		</div>
		<div>
			<label for="last_name">Last Name*: </label>
			<input type="text" name="last_name" value="{{ old('last_name') ? old('last_name') : $staffMember->last_name }}">
			{{ $errors->first('last_name') }}
		</div>
		<div>
			<label for="age">Age: </label>
			<input type="number" name="age" min="0" max="130" step="1" value="{{ old('age') ? old('age') : $staffMember->age }}">
			{{ $errors->first('age') }}
		</div>

		<img src="/img/staff/{{ $staffMember->profile_image }}" alt="profile image">

		<div>
			<label for="profile_image">Profile Image:<small>(optional)</small> </label>
			<input type="file" name="profile_image">
			{{ $errors->first('profile_image') }}
		</div>


		<input type="submit" value="Update staff">

	</form>
	
@endsection