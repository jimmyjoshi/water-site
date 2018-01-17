@extends('frontend.layouts.app')

@section('content')

{{ Form::open(['route' => 'frontend.auth.login', 'class' => 'form-horizontal']) }}

<div class="form-group">

<div class="col-md-6">
    {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
</div><!--col-md-6-->
</div><!--form-group-->

<div class="form-group">

<div class="col-md-6">
    {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
</div><!--col-md-6-->
</div><!--form-group-->

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
    <div class="checkbox">
        <label>
            {{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}
        </label>
    </div>
</div><!--col-md-6-->
</div><!--form-group-->

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
    {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn-form', 'style' => 'margin-right:15px']) }}

    {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
</div><!--col-md-6-->
</div><!--form-group-->

{{ Form::close() }}

               
@endsection
