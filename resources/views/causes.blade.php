{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('location_id', 'Location_id:') !!}
			{!! Form::text('location_id') !!}
		</li>
		<li>
			{!! Form::label('start_date', 'Start_date:') !!}
			{!! Form::text('start_date') !!}
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
			{!! Form::label('end_date', 'End_date:') !!}
			{!! Form::text('end_date') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}