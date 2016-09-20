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
		                    <th>Name</th>
		                    <th>Start Date</th>
		                    <th>End Date</th>
		                    <th>Location</th>
		                    <th></th>
		                  </tr>
		                </thead>
		                <tbody>
		                 
		                <tbody>     
                    </table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
