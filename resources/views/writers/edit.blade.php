@extends('app')

@section('content')

	<h1>Writer Edit Form</h1><hr>

	@include('errors.writers')
	{!! Form::model($info, ['method' => 'PATCH', 'action'=> ['WritersController@update', $info->id]]) !!}
		
		{{--Application form--}}
		@include('writers.form')

	<div class="form-group">		
		{!! Form::submit('Update',['class' =>'btn btn-default']) !!}
		{!! Form::close() !!}
	</div>

@stop