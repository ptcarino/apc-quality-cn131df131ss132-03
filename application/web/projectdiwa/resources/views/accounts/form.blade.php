
 <div class="form-group">

	{!! Form::label('username','Username:') !!}
	{!! Form::text('username',null,['class'=>'form-control']) !!}

</div>


<div class="form-group">

	{!! Form::label('password','Password:') !!}
	{!! Form::password('password', ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('email','Email:') !!}
	{!! Form::text('email',null,['class'=>'form-control']) !!}

</div>



<div class="form-group">

	{!! Form::label('role','Role:') !!}
	{!! Form::text('role',null,['class'=>'form-control']) !!}

</div>

 <div class="form-group">

	 {!! Form::hidden('salt',rand(),['class'=>'form-control']) !!}

 </div>
