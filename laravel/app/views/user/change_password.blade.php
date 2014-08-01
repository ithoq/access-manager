@extends('user.header_footer')
@section('user_title')
Change Password
@stop

@section('user_container')
	
	<div class="row">
	<div class="col-lg-7 col-lg-offset-1">

{{Form::open(['route'=>['setting.paypal'],'class'=>'form-horizontal','role'=>'form'])}}

<fieldset>
  
  <div class="form-group">
      {{Form::label('current', 'Current Password', ['class'=>'col-lg-4 control-label'])}}
      <div class="col-lg-8">
      	{{Form::text('current', NULL, ['class'=>'form-control','id'=>'current','placeholder'=>'your present password'])}}
      </div>
  </div>
  <div class="form-group">
      {{Form::label('new', 'New Password', ['class'=>'col-lg-4 control-label'])}}
      <div class="col-lg-8">
      	{{Form::text('password', NULL, ['class'=>'form-control','id'=>'new','placeholder'=>'choose a new password'])}}
      </div>
  </div>
  <div class="form-group">
      {{Form::label('confirm', 'Confirm Password', ['class'=>'col-lg-4 control-label'])}}
      <div class="col-lg-8">
      	{{Form::text('confirm_password', NULL, ['class'=>'form-control','id'=>'confirm','placeholder'=>'confirm new password'])}}
      </div>
  </div>
    
<div class="form-group">
      <div class="col-lg-10 col-lg-offset-6">
        {{Form::buttons()}}
      </div>
    </div>
    {{Form::close()}}
</fieldset>
</div>
</div>

@stop