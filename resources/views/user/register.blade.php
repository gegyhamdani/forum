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
          <a href="{{ url('user') }}" class="float-right btn btn-outline-primary mt-1">Masuk</a>
          <h4 class="card-title mt-2">Daftar Member</h4>
          <div class="text-center">
           @if(\Session::has('alert'))
           <div class="alert alert-danger">
            <div>{{Session::get('alert')}}</div>
          </div>
          @endif
        </header>
        <article class="card-body">
          {!! Form::open(['url'=>'user']) !!}
          <div class="form-group">
            {!! Form::label('member_name', 'Nama Lengkap :', ['class' => 'control-label']) !!}
            {!! Form::text('member_name', null, ['class' => 'form-control']) !!}
          </div> <!-- form-group end.// -->
          <div class="form-group">
            {!! Form::label('username', 'Username :', ['class' => 'control-label']) !!}
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
          </div> <!-- form-group end.// -->
          <div class="form-group">
            {!! Form::label('password', 'Password :', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control'])  !!}
          </div> <!-- form-group end.// -->
          <div class="form-group">
            {!! Form::label('email', 'Email :', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
          </div> <!-- form-group end.// -->
          <div class="form-group">
            {!! Form::label('tgl_lahir', 'Tanggal Lahir :', ['class' => 'control-label']) !!}
            {!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
          </div> <!-- form-group end.// -->
          <div class="form-group">
           {!! Form::label('jk', 'Jenis Kelamin :', ['class' => 'control-label']) !!}
           <div class="radio">
            <label>{!! Form::radio('jk', 'L') !!} Laki-Laki</label>
          </div>
          <div class="radio">
            <label>{!! Form::radio('jk', 'P') !!} Perempuan</label>
          </div> <!-- form-group end.// -->
          <div class="form-group">
            {!! Form::submit('Daftar', ['class' => 'btn btn-primary btn-block form-control' ]) !!}
          </div> <!-- form-group// -->                                        
          {!! Form::close() !!}
        </article> <!-- card-body end .// -->
        <div class="border-top card-body text-center">Sudah Punya Akun? <a href="{{ url('user') }}">Masuk Disini !</a></div>
      </div> <!-- card.// -->
    </div> <!-- col.//-->

  </div> <!-- row.//-->


</div>

@stop