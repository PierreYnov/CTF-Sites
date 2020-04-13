@extends('auth.users.organizer.baselayout')

@section('title')
    Competition Information
@stop

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Créer une Competition
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      @if(Session::has('message'))
      <br>
      <div class="alert alert-success errors">{{ Session::get('message') }}</div>
      @endif
        <div class="col-md-10 col-md-offset-1">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3>Information</h3>
            </div>
            <div class="box-body">
            @if(is_null($event))
            {!! Form::model(null, array('route' => array('event_register'),'class'=>'form','id'=>'compfrm','data-parsley-validate')) !!}
            @else
            {!! Form::model($event, array('route' => array('event_register'),'class'=>'form','id'=>'compfrm','data-parsley-validate')) !!}
            {!! Form::hidden('ref_guid', null) !!}
            @endif
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Nom de la compétition*') !!}
                    {!! Form::text('name', null, array(
                      'class' => 'form-control',
                      'placeholder' => '','required',
                      'data-parsley-required-message' => "C'est nécessaire",
                      'data-parsley-minlength-message' => 'Cela ne peut pas être moins de 3 caractères',
                      'data-parsley-pattern-message' => 'Cela ne peut contenir que des alphabets, des nombres & (& .-)',
                      'data-parsley-trigger' => 'change focusout',
                      'data-parsley-pattern' => '/^[ a-zA-Z0-9&.-]*$/',
                      'data-parsley-minlength' => '3')) !!}
                    </div>
                  {!! Form::label('start_time', 'Heure de début*') !!}
                  <div class="margin-bottom input-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  {!! Form::text('start_time', null, array(
                    'id' => 'datetimepicker_start',
                    'class' => 'form-control',
                    'data-parsley-required-message' => "C'est nécessaire",
                    'data-parsley-minlength-message' => 'Cela ne peut pas être moins de 3 caractères',
                    'data-parsley-trigger' => 'change',
                    'data-parsley-minlength' => '3')) !!}
                  </div>
                  {!! Form::label('end_time', 'Heure de fin*') !!}
                  <div class="margin-bottom input-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  {!! Form::text('end_time', null, array(
                    'class' => 'form-control',
                    'id' => 'datetimepicker_end',
                    'data-parsley-required-message' => "C'est nécessaire",
                    'data-parsley-minlength-message' => 'Cela ne peut pas être moins de 3 caractères',
                    'data-parsley-trigger' => 'change',
                    'data-parsley-minlength' => '3')) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                  {!! Form::label('description', 'Description*') !!}
                  {!! Form::textarea('description', null, array(
                    'class' => 'form-control', 'required',
                    'placeholder' => 'Ecrivez quelque chose à propos de la compétition',
                    'size' => '5x7',
                    'data-parsley-trigger'=>'keyup',
                    'data-parsley-minlength-message' => 'Cela ne peut pas être moins de 3 caractères',
                    'data-parsley-maxlength-message' => 'Cela ne peut pas dépasser 1000 caractères',
                    'data-parsley-maxlength' => '1000',
                    'data-parsley-validation-threshold'=>'10',
                    'data-parsley-minlength' => '3')) !!}
                  </div>
                </div>
              </div>
              <div id="form1_alert" class="alert"></div>
              <div class="text-center">
                {{Form::button('Sauvegarder', array('type' => 'submit', 'class' => 'btn btn-primary btn-block'))}}
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
    </div>
  </section>
</div>
@stop

@section('scripts')
  <script type="text/javascript">
    $(function () {
        $('#datetimepicker_start').datetimepicker(
          {
            format: 'YYYY-MM-DD HH:mm:00'
          }
        );
        $('#datetimepicker_end').datetimepicker(
          {
            format: 'YYYY-MM-DD HH:mm:00',
            useCurrent: false
          }
        );

        $("#datetimepicker_start").on("dp.change", function (e) {
            $('#datetimepicker_end').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker_end").on("dp.change", function (e) {
            $('#datetimepicker_start').data("DateTimePicker").maxDate(e.date);
        });
    });
  </script>
@stop
