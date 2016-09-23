{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('cause_helper_id', 'Cause_helper_id:') !!}
			{!! Form::text('cause_helper_id') !!}
		</li>
		<li>
			{!! Form::label('value', 'Value:') !!}
			{!! Form::text('value') !!}
		</li>
		<li>
			{!! Form::label('currency_code', 'Currency_code:') !!}
			{!! Form::text('currency_code') !!}
		</li>
		<li>
			{!! Form::label('user_create_id', 'User_create_id:') !!}
			{!! Form::text('user_create_id') !!}
		</li>
		<li>
			{!! Form::label('created_at', 'Created_at:') !!}
			{!! Form::text('created_at') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}