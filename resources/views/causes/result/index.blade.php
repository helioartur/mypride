@extends('layouts.app')

@section('htmlheader_title')
	Cause Result
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection




@section('main-content')

    <h1>Cause Result</h1>

	<div class="row">
        <div class="col-md-4">
           <!-- Cause -->
          <div class="box box-primary">
            <div class="box-body">

              <img class="img-responsive" src="{{asset('/img/helping-hands.jpg')}}" alt="">

              <br>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Money</b> <a class="pull-right">$13,287</a>
                </li>                    
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Help</b></a>
            </div><!-- /.box-body -->
          </div><!-- /.box -->

          <!-- Description -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Description</h3>
            </div><!-- /.box-header -->
            <div class="box-body">                  
              
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur aperiam maxime suscipit molestiae rem voluptatum veritatis impedit accusantium distinctio ex delectus cumque earum, consequuntur possimus, optio accusamus dolorum, iusto nemo.
              </p>
              
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <!-- Description -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Top Friends</h3>
            </div><!-- /.box-header -->
            <div class="box-body">                 
              
                <div class="col-md-3 col-xs-6">
	                <div class="mag img-responsive">
	                    <br />
	                    <img data-toggle="magnify" class="thumbnail img-responsive" src="http://joshadmin.com/assets/img/authors/avatar.jpg" alt="">
	                </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar7.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar5.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>

                <!--/span-->
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar2.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar7.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" class="thumbnail img-responsive" src="http://joshadmin.com/assets/img/authors/avatar1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar2.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="mag img-responsive">
                        <br />
                        <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive">
                    </div>
                </div>
              
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
        <div class="col-md-8">
              <!-- Cause -->
          <div class="box box-primary">
            <div class="box-body">
			</div>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
