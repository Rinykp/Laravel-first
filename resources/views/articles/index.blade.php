@extends("layouts.theme");
@section("content")
<a class="btn btn-info" href="articles/create">Add article</a>
<ul class="style1">
    
@foreach($articles as $article)

				<li class="first">
					<h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                    <p><a href="#">{{$article->body}}</a></p>
                    <a class="btn btn-warning" href="/articles/{{$article->id}}/edit">Edit</a>
                

				</li>
				
@endforeach
			</ul>



@endsection