@extends('app')

@section('content')
	<h1>Registration Form !!!!</h1>
	<hr>
	{!! Form::open(['url'=> 'dept_info']) !!}
	<div class="form-group">
		{!! Form::label('dept_name', 'Department Name') !!}
		{!! Form::text('dept_name',null, ['class' => 'form-control'] ) !!}

	</div>
	<div class="form-group">
		{!! Form::label('faculty_name', 'Faculty Name') !!}
		{!! Form::text('faculty_name',null, ['class' => 'form-control'] ) !!}
	</div>
	<div class="form-group">
		{!! Form::label('info', 'Information') !!}
		{!! Form::textarea('info',null, ['class' => 'form-control'] ) !!}
	</div>
	{!! Form::submit('Submit',['class' =>'btn btn-default']) !!}
	{!! Form::close() !!}

@stop