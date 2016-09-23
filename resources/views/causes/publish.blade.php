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
      <div class="col-md-12">
        <!-- Box Comment -->
        <div class="box box-widget">
          <div class='box-header with-border'>
            <div class='user-block'>
              <img class='img-circle' src='{{asset('/img/user2-160x160.jpg')}}' alt='user image'>
              <span class='username'><a href="#">{{Auth::user()->name}}</a></span>
              <span class='description'>Created Cause - 7:30 PM Today</span>
            </div><!-- /.user-block -->
            <div class='box-tools'>
              <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button>
              <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
              <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class='box-body'>
                <!-- post text -->
                <p>the coast of the Semantics, a large language ocean.
                  A small river named Duden flows by their place and supplies
                  it with the necessary regelialia. It is a paradisematic
                  country, in which roasted parts of sentences fly into
                  your mouth.</p>

                <img class="img-responsive pad" src="{{asset('/img/photo2.png')}}" alt="Photo">
                <p>I took this photo this morning. What do you guys think?</p>
                <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button>
                <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Like</button>
                <span class='pull-right text-muted'>127 likes - 3 comments</span>
          </div><!-- /.box-body -->
          <div class='box-footer box-comments'>
            <div class='box-comment'>
              <!-- User image -->
              <img class='img-circle img-sm' src='{{asset('/img/user2-160x160.jpg')}}' alt='user image'>
              <div class='comment-text'>
                <span class="username">
                  {{Auth::user()->name}}
                  <span class='text-muted pull-right'>8:03 PM Today</span>
                </span><!-- /.username -->
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
              </div><!-- /.comment-text -->
            </div><!-- /.box-comment -->
          </div><!-- /.box-footer -->
          <div class="box-footer">
            <form action="#" method="post">
              <img class="img-responsive img-circle img-sm" src="{{asset('/img/user2-160x160.jpg')}}" alt="alt text">
              <!-- .img-push is used to add margin to elements next to floating images -->
              <div class="img-push">
                <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
              </div>
            </form>
          </div><!-- /.box-footer -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    
  </div><!-- /.row -->
@endsection