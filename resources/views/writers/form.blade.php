<div class="form-group">
		{!! Form::label('first_name', 'First Name') !!}
		{!! Form::text('first_name',null, ['class' => 'form-control'] ) !!}

	</div>
	<div class="form-group">
		{!! Form::label('last_name', 'Last Name') !!}
		{!! Form::text('last_name',null, ['class' => 'form-control'] ) !!}

	</div>
	<div class="form-group">
		{!! Form::label('program', 'Program') !!}
		{!! Form::select('program',  array('MADD' =>'Mobile Application Design & Development', 'WADD' => 'Web Application Design & Development', 'CUID' =>'Certified User Interface Designer' ) , null, ['class' => 'form-control']);!!}
		      	
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email',null, ['class' => 'form-control'] ) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password') !!}
		{!! Form::password('password',['class' => 'form-control'] ) !!}

	</div>
	<div class="form-group">
		{!! Form::label('repassword', 'Re Password') !!}
		{!! Form::password('repassword',['class' => 'form-control'] ) !!}

	</div>
	<div class="form-group">
		{!! Form::label('gender', 'Gender') !!}
		{!! Form::radio('gender', 'Male', true) !!}Male
		{!! Form::radio('gender', 'Female') !!} Female


	</div>
	<div class="form-group">
		{!! Form::label('birthday', 'Birthday') !!}
		{!! Form::input('date','birthday', date('Y-m-d') , ['class' => 'form-control'] ) !!}

	</div>