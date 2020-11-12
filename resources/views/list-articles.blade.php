@extends("layouts.theme");
@section("post")
@foreach($articles as $article)

<ul class="style1">
				<li class="first">
					<h3>{{$article->title}}</h3>
					<p><a href="#">{{$article->body}}</a></p>
				</li>
				
			</ul>
@endforeach



@endsection