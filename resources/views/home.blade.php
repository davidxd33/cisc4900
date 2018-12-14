@extends('layouts.app')

@section('content')
<div class="jumbrotron">
	<div class="container">
		<div class="h3">Eat Good. Save Money.</div>
	</div>
</div>

<div class="container-fluid">
    <div class="row">
        @if($posts->count())
        	@foreach($posts as $post)
        	{{ $post->id}} <br>
        	@endforeach

        @else
            No Posts
        @endif
    </div>
</div>

<div class="container">
    Hello.n
</div>
@endsection
