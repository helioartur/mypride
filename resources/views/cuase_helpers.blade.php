{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('cause_id', 'Cause_id:') !!}
			{!! Form::text('cause_id') !!}
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