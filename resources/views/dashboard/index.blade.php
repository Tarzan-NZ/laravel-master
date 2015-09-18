@extends('layouts.master')

@section('content')

<h1>Your Dashboard</h1>
<small>Currently logged in as {{ Auth::user()->name }}</small>

<ul>
	<li>Account created {{ \Carbon\Carbon::now()->diffForHumans(Auth::user()->created_at, true) }} ago</li>
</ul>

@include('dashboard.change_password')

<div>
	
<h2></h2>

</div>

@endsection