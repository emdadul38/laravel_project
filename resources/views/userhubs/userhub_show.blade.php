@extends('app')

@section('content')
	<table class="table table-hover">

			<tr>
				<th>Program</th>
				<th>Name</th>
				<th>District</th>
				<th>Email</th>
			</tr>
		@foreach($userhub as $userhubs)
			<tr>
				<td>{{$userhubs->program}}</td>
				<td>{{$userhubs->name}} </td>
				<td>{{$userhubs->district}}</td>
				<td>{{$userhubs->email}}</td>
			</tr>

		@endforeach
	</table>
@stop