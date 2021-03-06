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
					@foreach($forum_list as $forum)
					<h4>{{ $forum->forum_name }}</h4>
					<hr/>
						@foreach($forum->subforums as $subforum)
                        {{ link_to('subforum/index?id=' . $subforum->subforum_id, $subforum->subforum_name , ['class' => '']) }}
						<br/>
						@endforeach
					@endforeach
					<br/>
				</div>
			</div>
		</div>
		<div class="col-4">
			@include('sidebar')
		</div>
	</div>
</div>
@stop