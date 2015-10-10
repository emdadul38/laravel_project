@extends('app')

@section('content')
	<h1>My Id is {{$id}}</h1>

	<h2>Application Form Title !!</h2>	
	<h3>List of dept. name !!!</h3>
	@{{We are student of CSE !!}}

	{{-- Deprtment list show in here --}}
	
	@if(count($dept))

		@foreach($dept as $department)
			<li><a href="{{action('ApplicationForm@application', $department)}} ">{{$department}}</a> </li>

		@endforeach
	@else
		<p>nothing found</p>
	@endif
@stop