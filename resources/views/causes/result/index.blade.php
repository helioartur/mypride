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
            {!! Form::open(['route'=>'document.store', 'id'=>'causes-result']) !!}
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Cause Result</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">                                       
                        {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>'3','style'=>'width: 100%;'])  !!}
                    </div>
                    <div class="box-footer">
                        {!! Form::button('Foto', ['class'=>'btn btn-default btn-sm pull-left'])  !!}
                        {!! Form::submit('Publicar', ['class'=>'btn btn-primary btn-sm pull-right'])  !!}      
                    </div>
    			</div>
            {!! Form::close() !!}  
            <div class="box box-default">
                <div class="box-body">   
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('/../img/user2-160x160.jpg')}} alt="user image">
                        <span class='username'>
                          <a href="#">{{Auth::user()->name}}</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Shared publicly - 7:30 PM today</span>
                      </div><!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class='user-block'>
                        <img class='img-circle img-bordered-sm' src='../../dist/img/user6-128x128.jpg' alt='user image'>
                        <span class='username'>
                          <a href="#">Adam Jones</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Posted 5 photos - 5 days ago</span>
                      </div><!-- /.user-block -->
                      <div class='row margin-bottom'>
                        <div class='col-sm-6'>
                          <img class='img-responsive' src='../../dist/img/photo1.png' alt='Photo'>
                        </div><!-- /.col -->
                        <div class='col-sm-6'>
                          <div class='row'>
                            <div class='col-sm-6'>
                              <img class='img-responsive' src='../../dist/img/photo2.png' alt='Photo'>
                              <br>
                              <img class='img-responsive' src='../../dist/img/photo3.jpg' alt='Photo'>
                            </div><!-- /.col -->
                            <div class='col-sm-6'>
                              <img class='img-responsive' src='../../dist/img/photo4.jpg' alt='Photo'>
                              <br>
                              <img class='img-responsive' src='../../dist/img/photo1.png' alt='Photo'>
                            </div><!-- /.col -->
                          </div><!-- /.row -->
                        </div><!-- /.col -->
                      </div><!-- /.row -->

                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div><!-- /.post -->
                  </div><!-- /.tab-pane -->
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
