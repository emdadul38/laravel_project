@extends('app')

@section('content')
	<h1>List of Writers !!</h1>
	<table class="table table-hover">

			<tr>
				<th>Name</th>
				<th>Program</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Birthday</th>
				<th>Edit/Delete</th>
			</tr>
		@foreach($data as $info)
			<tr>
				<td>{{$info->first_name}} {{$info->last_name}}</td>
				<td>{{$info->program}} </td>
				<td>{{$info->email}}</td>
				<td>{{$info->gender}}</td>
				<td>{{$info->birthday}}</td>
				<td> <a href="{{action('WritersController@edit',$info->id)}} ">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{action('WritersController@delete',$info->id)}} ">Delete</a></td>
			</tr>

		@endforeach
	</table>
@stop