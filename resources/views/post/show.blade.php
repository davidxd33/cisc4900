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
    
    $('#video_link').html('<iframe width="560" height="315" style="display:block; margin:0 auto;" src="//www.youtube.com/embed/' + id + '" frameborder="0" allowfullscreen></iframe>');
	</script>
@endsection

@section('content')
<div class="container content">
	<div class="row">
		<div class="col-md-4">
			<h2 class="heading-1">{{ $post->post_title }}</h2>
			<p class="info">A recipe created by {{ $post->user->name }} <br> Enjoy this creation as a {{ $post->category }} entree.</p>
		</div>
		<div class="col-md-8">
			<span id="video_link">{{ $post->video_url }}</span>
		</div>
	</div>

	<div class="recipe">
		{!! $post->post_body !!}
	</div>
</div>
@endsection