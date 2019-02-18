@extends('template')

@section('main')
@include('navbarf')
<hr/>
<br/>
<br/>
<br/>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <header class="card-header">
          <center>
            <h4 class="card-title mt-2">Bikin Forum</h4>
          </center>
        </header>
        <article class="card-body">
          {!! Form::open(['url'=>'forum']) !!}
          <div class="form-group">
            {!! Form::label('forum_name', 'Nama Forum  :', ['class' => 'control-label']) !!}
            {!! Form::text('forum_name', null, ['class' => 'form-control']) !!}
          </div> <!-- form-group end.// -->
          <div class="form-group">
            {!! Form::submit('Input', ['class' => 'btn btn-primary btn-block form-control' ]) !!}
          </div> <!-- form-group// -->                                        
          {!! Form::close() !!}
        </article> <!-- card-body end .// -->
      </div> <!-- card.// -->
    </div> <!-- col.//-->

  </div> <!-- row.//-->


</div>

@stop