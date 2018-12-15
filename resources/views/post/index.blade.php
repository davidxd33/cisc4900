@extends('layouts.app')
@section('scripts')
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script>
	function getId(url) {
	    var exp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
	    var match = url.match(exp);

	    if (match && match[2].length == 11) {
	        return match[2];
	    } else {
	        return '7bZJ3FaaKRU';  // placeholder video
    	}
	}

	var link = $("#video_link").val();
	var id   = getId(link);
    
    $('#video_link').html('<iframe width="560" height="315" style="display:block; margin:0 auto; width:500px" src="//www.youtube.com/embed/' + id + '" frameborder="0" allowfullscreen></iframe>');
	</script>
@endsection
@section('content')
<div class="container">
	<h3 class="heading-1" style="margin-top: 40px;">Viewing all recipes!</h3>
	<div class="row">
		@if($posts->count())
			@foreach($posts as $post)
					
				<div class="col-md-6">	
					<div class="card">
						<img src="" alt="" class="card-img-top">
						<h5 class="card-title"><a href="/recipes/{{ $post->id }}">{{ $post->post_title }}, by {{ $post->user->name }}</a></h5>
						<div class="card-body">	
							<p class="card-text" id="video_link">{{ $post->video_url }}</p>
						</div>
					</div>
				</div>

			@endforeach
		@else
			No Posts
		@endif

		{{ $posts->links() }}
	</div>
</div>
@endsection