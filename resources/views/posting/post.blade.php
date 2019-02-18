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
					<p>Tanggal Posting : {{ $detailpost->tgl_buat}}</p>
				</div>
				<div class="card-header card-profil">
					<p>Oleh : {{ $detailpost->user->username }}</p>
				</div>
				<div class="card-body">
					<h4>{!! $detailpost->judul !!}</h4>
					<hr/>
					<p>{!! $detailpost->isi !!}</p>
				</div>
			</div>
			<br/>
			<hr/>
			<br/>
			@foreach($getcomment as $comment)
			<div class="card">
				<div class="card-header card-post">
					<p>Tanggal Comment : {{ $comment->tgl_buat }}</p>
				</div>
				<div class="card-body">
					<p>{!! $comment->isi !!}</p>
				</div>
			</div>
			<br/>
			@endforeach
			<hr/>
			<div class="card">
				<div class="card-header card-reply">
					<p>Balas</p>
				</div>
				<div class="card-body body-reply">
					{!! Form::open(['url'=>"posting/{$detailpost->posting_id}"]) !!}
					<div class="form-group">
						{!! Form::textarea('isi', null, ['class' => 'ckeditor']) !!}
					</div> <!-- form-group end.// -->
					<div class="form-group">
						{!! Form::submit('Balas', ['class' => 'btn btn-primary btn-block form-control' ]) !!}        
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