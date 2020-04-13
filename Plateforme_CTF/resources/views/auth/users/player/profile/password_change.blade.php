@extends('auth.users.player.baselayout')

@section('title')
	Change your password
@stop

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
		<h1>
      Joueur
      <small>Modifier les paramètres de sécurité {{$profile->display_name}}</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

		<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Changez le mot de passe</h1>
			<p>Ici, vous pouvez changer votre mot de passe. Entrez simplement le nouveau mot de passe et appuyez sur le bouton "Réinitialiser le mot de passe".</p>
			<br>
		        @if(Session::has('message'))
		                <br><br>
		                <div class="alert alert-info errors">{{ Session::get('message') }}</div>
		        @endif
		        @if (count($errors) > 0)
		                <div class="alert alert-danger errors">{!! Html::ul($errors->all(), array('class'=>'errors')) !!}</div>
		        @endif

		        {!! Form::open(array('url' => 'user/settings/password','class'=>'form')) !!}

		        <br>{!! Form::label('password', 'Mot de passe') !!}
		        {!! Form::password('password', array('class' => 'form-control')) !!}
		        <br>
		        {!! Form::label('password_confirmation','Confirmez le mot de passe',['class'=>'control-label']) !!}
		        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
		        <br>
		        {!! Form::submit('Réinitialisez le mot de passe' , array('class' => 'btn btn-primary')) !!}

		        {!! Form::close() !!}
		        <br>
		      </div>
		</div>


	</section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
