@extends("layouts.theme");
@section("content")
<a href="/articles">View all articles</a>
</br>
					<h3>{{$articles->title}}</h3>
					<p>{{$articles->body}}</p>
<form method="POST"  action="/articles/{{$articles->id}}">

@csrf
@method("DELETE")
    
    <div class="form-group">
    <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" >Delete</button>  
    </div>


</form>

@endsection