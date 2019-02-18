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
				<div class="card-body">
					@foreach($subforum_list as $sub)
					{{ link_to('posting/' . $sub->posting_id, $sub->judul, ['class' => 'remove-effect navbar-brand']) }}
					<hr/>
					@endforeach
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