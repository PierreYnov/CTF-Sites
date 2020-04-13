@extends('emails.baselayout')
@section('content')
  <h2>Reéinitiliasez votre mot de passe</h2>
  <div>
  Veuillez suivre le lien ci-dessous pour réinitialiser votre mot de passe.<br>
      <a href="{{ URL::to('user/password/reset/'.$token) }}">{{ URL::to('user/password/reset/'.$token) }}</a>.<br/>
  </div>
@endsection
