@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.list_cause') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  {{ trans('adminlte_lang::message.list_cause') }}
@endsection


@section('main-content')
    @include('layouts.shared.alert')
	<div class="row">
	    <div class="col-lg-12 col-xs-6">
	        <div class="box box-default">
	            <div class="box-header with-border">
	              <h3 class="box-title"></h3>
	              <div class="pull-left box-tools">
	                  <a href="{{ url('causes/create') }}" class="btn btn-success btn-sm" role="button" data-toggle="tooltip" title="{{ trans('adminlte_lang::message.new_cause') }}">
	                       <i class="fa fa-plus"></i>
	                  </a>
	                  
	              </div><!-- /. tools -->
	            </div><!-- /.box-header -->
	  
	            <div class="box-body">
	                <table id="example1" class="table table-bordered">
		                <thead>
		                  <tr>
		                    <th style="width: 10px">#</th>
		                    <th>Title</th>
		                    <th>Start Date</th>
		                    <th>End Date</th>
		                    <th>Location</th>
		                    <th></th>
		                  </tr>
		                </thead>
		                <tbody>
		                 	@foreach ($causes as $cause)
  								<tr>
  								    <td></td>
  									<td>{{$cause->title}}</td>
  									<td>{{$cause->start_date}}</td>
  									<td>{{$cause->end_date}}</td>
  									<td>{{$cause->location_id }}</td>
  									<td> 							                          
                                        <button type="button" class="btn btn-xs btn-warning btn-flat" data-toggle="modal" data-target="#confirmDelete" data-toggle="tooltip" title="Delete"data-product_id="{{ $cause->id }}" data-product_name="{{ $cause->id }}">
				                            <i class="fa fa-trash"></i>
				                        </button> 
				                        <a href="{{ route('causes.edit',$cause->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Editar" data-remote='true'])>   <i class="fa fa-edit"></i>
                                        </a> 

				                        <a href="{{ url('cause/result') }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Cause Result" ])>   <i class="fa fa-rocket"></i>
                                        </a>
                                        <a href="{{ route('causes.edit',$cause->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Share" data-remote='true'])>   <i class="fa  fa-share"></i>
                                        </a>
                                    </td>
  								</tr>
							@endforeach
		                <tbody>     
                    </table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
