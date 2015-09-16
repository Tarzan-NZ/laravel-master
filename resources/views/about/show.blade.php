@extends('layouts.master')

@section('content')
	
	<h1>{{$staffMember->first_name}} {{$staffMember->last_name}}</h1>

	<p>Age: {{ $staffMember->age }}</p>

	<a href="{{ url('about/'.$staffMember->slug.'/edit') }}">Change details</a>

@endsection