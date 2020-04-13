@extends('non-auth.baselayout')
@section('title') {{config('appmeta.name')}} - {{config('appmeta.summary')}} @stop

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {!! config('appmeta.htmltitle') !!}
      <small>{{config('appmeta.summary')}}</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <p class="lead">{{config('appmeta.description')}}</p>
            <p>Propulsé Par Laravel</p>

					</div>
					</div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@stop
