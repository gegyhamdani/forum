@extends('template')

@section('main')
<br/>
<br/>
<br/>
<br/>

<div class="text-center">
 @if(\Session::has('alert'))
 <div class="alert alert-danger">
  <div>{{Session::get('alert')}}</div>
</div>
@endif
@if(\Session::has('alert-success'))
<div class="alert alert-success">
  <div>{{Session::get('alert-success')}}</div>
</div>
@endif
<div class="form-signin">
  {!! Form::open(['url'=>'user/loginPost']) !!}
  <h1 class="h3 mb-3 font-weight-normal">Masuk Akun Member</h1>
  {!! Form::label('username', 'Username : ', ['class' => 'control-label']) !!}
  {!! Form::text('username', null, ['class' => 'form-control']) !!}
  {!! Form::label('password', 'Password : ', ['class' => 'control-label']) !!}
  {!! Form::password('password', ['class' => 'form-control']) !!}
  {!! Form::submit('Masuk', ['class' => 'btn btn-primary btn-block form-control' ]) !!}
  <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
  {!! Form::close(); !!}
  <a href="register">Belum Jadi Member? Yuk Gabung</a>
</div>

@stop 