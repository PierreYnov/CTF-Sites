@extends('non-auth.baselayout')
@section('title') {!! config('appmeta.name') !!} - {{config('appmeta.summary')}} @stop

@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="row padding-left-right">
      <div class="col-md-8">
        <div class="jumbotron">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-7">
                <h1>{!! config('appmeta.htmltitle') !!}</h1>
                <p class="lead">
                  {{config('appmeta.description')}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 register-box-body">
        <h2>S'inscrire</h2>
          @if(Session::has('message'))
          <br>
          <div class="alert alert-info errors">{{ Session::get('message') }}</div>
          @endif
          {!! Form::open(array('url' => '/register','class'=>'form register-form','data-parsley-validate')) !!}
          <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
          <br>{!! Form::label('username', 'Nom d utilisateur') !!}
          {!! Form::text('username', null, array(
            'class' => 'form-control',
            'placeholder' => '','required',
            'data-parsley-required-message' => 'C est nécessaire',
            'data-parsley-minlength-message' => 'Cela ne peut pas être moins de 5 caractères',
            'data-parsley-pattern-message' => 'Cela ne peut contenir que des alphabets, des nombres et des caractères (_)',
            'data-parsley-trigger' => 'change focusout',
            'data-parsley-pattern' => '/^[a-zA-Z0-9_]*$/',
            'data-parsley-minlength' => '5')) !!}
          @if ($errors->has('username'))
              <span class="alert-danger">
                  <strong>{{ $errors->first('username') }}</strong>
              </span>
          @endif
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <br>{!! Form::label('email', 'Adresse Email') !!}
          {!! Form::text('email', null, array(
            'class' => 'form-control',
            'type' => 'email',
            'placeholder' => 'example@gmail.com','required',
            'data-parsley-required-message' => 'C est nécessaire',
            'data-parsley-type-message' => 'S il vous plaît, mettez une adresse email valide',
            'data-parsley-trigger' => 'change focusout',
            'data-parsley-type' => 'email')) !!}
          @if ($errors->has('email'))
              <span class="alert-danger">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          </div>

          <div class="row"><div class="form-group col-xs-6">
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <br>{!! Form::label('password', 'Mot de passe') !!}
          {!! Form::password('password', array(
            'class' => 'form-control','required',
            'id'                            => 'inputPassword',
            'data-parsley-required-message' => 'Mot de passe requis',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-minlength'        => '6',
            'data-parsley-maxlength'        => '20')) !!}
          @if ($errors->has('password'))
              <span class="alert-danger">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          </div></div>

          <div class="form-group col-xs-6">
          <br>{!! Form::label('password_confirmation','Retaper le mot de passe',['class'=>'control-label']) !!}
          {!! Form::password('password_confirmation',array(
            'class'=>'form-control','required',
            'id'                            => 'inputPasswordConfirm',
            'data-parsley-required-message' => 'Une confirmation de mot de passe est requise ',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-equalto'          => '#inputPassword',
            'data-parsley-equalto-message'  => 'Différent du mot de passe ')) !!}
          </div></div>
          <br>
          {!! Form::submit('S inscrire' , array('class' => 'btn btn-primary')) !!}
          {!! Html::link('/login', 'Déjà inscrit ? Se connecter',array('class'=>'btn btn-link'))!!}
          {!! Form::close() !!}
          <br>
      </div>
    </div>
  </section>
</div>
<script>
var parsleyOptions = {
    successClass: 'has-success',
    errorClass: 'has-error',
    classHandler : function( _el ){
        return _el.$element.closest('.form-group');
    }
};

$('.register-form').parsley(parsleyOptions);
</script>
@stop
