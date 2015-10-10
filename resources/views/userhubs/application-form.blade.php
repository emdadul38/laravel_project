@extends('app')

@section('content')
	
	<h1>Application Form</h1><hr>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}} </li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=> 'userhub_register']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name',null, ['class' => 'form-control'] ) !!}

	</div>
	<div class="form-group">
		{!! Form::label('program', 'Program') !!}
		{!! Form::select('district',  array('MADD' =>'Mobile Application Design & Development', 'WADD' => 'Web Application Design & Development', 'CUID' =>'Certified User Interface Designer' ) , null, ['class' => 'form-control']);!!}
		      	
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email',null, ['class' => 'form-control'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('district', 'District') !!}
		{!! Form::select('district', array('Dhaka' => 'Dhaka','Rangpur' =>'Rangpur') ,null, ['class' => 'form-control']);!!}
	</div>
	{!! Form::submit('Submit',['class' =>'btn btn-default']) !!}
	{!! Form::close() !!}
	
	
@stop