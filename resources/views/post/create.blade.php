@extends('layouts.app')

@section('scripts')
	<script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'body' );
	</script>
@endsection

@section('content')
<div class="container content">
	<h2 class="heading-1">Creating a new recipe <span>Craft something amazingly cheap!</span></h2>

	<form action="/recipes" method="POST">
		@csrf

		<div class="form-group">
			<label for="post_title">Recipe Name</label>
			<input type="text" class="form-control" name="post_title" id="post_title" placeholder="Chicken Wings">
		</div>
		<div class="form-group">
			<label for="video_url">Video Guide Link</label>
			<input type="text" class="form-control" id="video_url" name="video_url" placeholder="Youtube URL">
		</div>
		<div class="form-group">
		<label for="cat">What time is this recipe for?</label>
		<select class="form-control" name="category" id="cat">
		  <option value="breakfast">Breakfast</option>
		  <option value="lunch">Lunch</option>
		  <option value="dinner">Dinner</option>
		</select>
		</div>
		<div class="form-group">
			<label for="post_body">Recipe Body</label>
			<textarea id="body" cols="30" name="post_body" rows="10" class="form-control"></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection