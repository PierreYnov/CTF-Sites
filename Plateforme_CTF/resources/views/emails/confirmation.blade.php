@extends('emails.baselayout')
@section('content')
  <h2>Vérifiez votre adresse e-mail</h2>
  <div>
      <h3> {!! config('appmeta.name') !!} </h3>
      Veuillez suivre le lien ci-dessous pour vérifier votre adresse email.
      <a href="{{ URL::to('user/verify/' . $confirmcode) }}">{{ URL::to('user/verify/' . $confirmcode) }}</a>.<br/>
  </div>
@endsection
