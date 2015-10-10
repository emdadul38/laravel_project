@extends('app');

@section('content')
	<h1>This is the Department information !!</h1>

	@foreach($dept as $department)
	
		{{-- another way of action /dept/{{$department->id}}--}}
		{{--action('DepartmentController@dept', $department->id)  --}}

		<h2><a href="{{url('dept',$department->id) }}">Department Name: {{$department->dept_name}}</a></h2>
		<h4>Faculty Name:{{$department->faculty_name}}</h4>
		<p>{{$department->info}}</p>
	@endforeach


@stop
