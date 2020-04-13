@extends('emails.baselayout')
@section('content')
  <h2>Reéinitiliasez votre mot de passe</h2>
  <div>
  Veuillez suivre le lien ci-dessous pour réinitialiser votre mot de passe.<br>
      {{ URL::to('user/password/reset/'.$token) }}.<br/>
  </div>
@endsection
