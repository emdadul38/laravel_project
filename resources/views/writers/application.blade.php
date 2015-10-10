@extends('app')

@section('content')

	<h1>Application Form</h1><hr>

	@include('errors.writers')
	
	{!! Form::open(['url'=> 'writers_store']) !!}
		
		{{--Application form--}}
		@include('writers.form')
	
	<div class="form-group">		
		{!! Form::submit('Submit',['class' =>'btn btn-default']) !!}
		{!! Form::close() !!}
	</div>

@stop