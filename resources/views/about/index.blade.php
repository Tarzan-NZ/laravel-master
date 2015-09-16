@extends('layouts.master')

@section('title', $title)

@section('meta-desc', $metaDesc)

@section('content')
	<h1>About page</h1>

	<a href="{{ url('about/create') }}">Create New Staff Member</a>

	<ul>
		@foreach ($allStaff as $staffMember)
		<li><a href="{{ url('about/'.$staffMember->slug) }}">{{$staffMember->first_name}} {{$staffMember->last_name}}</a></li>			
		@endforeach
	</ul>
	
@endsection