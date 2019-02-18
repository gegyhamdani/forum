@extends('template')

@section('main')
@include('navbarf')
@include('navbars')
@include('carousel')
<br/>
<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-header card-post">
					<p>{{date('D Y-m-d') }}</p>
				</div>
				<div class="card-header card-profil">
					<p>{{ $session = Session::get('username') }}</p>
				</div>
				<hr/>
				<div class="card-body body-reply">
					{!! Form::open(['url'=>"posting"]) !!}
					<div class="form-group">
						{!! Form::select('subforum', $data, null, ['class' => 'form-control', 'placeholder' => '-- Pilih Forum --']) !!}
					</div> <!-- form-group end.// -->
					<hr/>
					<div class="form-group">
						{!! Form::text('judul', null, ['class' => 'form-control', 'placeholder'=>'Judul Posting']) !!}
					</div> <!-- form-group end.// -->
					<div class="form-group">
						{!! Form::textarea('isi', null, ['class' => 'ckeditor']) !!}
					</div> <!-- form-group end.// -->
					<div class="form-group">
						{!! Form::submit('POST', ['class' => 'btn btn-primary btn-block form-control' ]) !!}        
					</div>                             
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="col-4">
				@include('sidebar')
			</div>
		</div>
	</div>
</div>
@stop