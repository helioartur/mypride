{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('item_id', 'Item_id:') !!}
			{!! Form::text('item_id') !!}
		</li>
		<li>
			{!! Form::label('itemType', 'ItemType:') !!}
			{!! Form::text('itemType') !!}
		</li>
		<li>
			{!! Form::label('fullPath', 'FullPath:') !!}
			{!! Form::text('fullPath') !!}
		</li>
		<li>
			{!! Form::label('mimetype', 'Mimetype:') !!}
			{!! Form::text('mimetype') !!}
		</li>
		<li>
			{!! Form::label('mediaType', 'MediaType:') !!}
			{!! Form::text('mediaType') !!}
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