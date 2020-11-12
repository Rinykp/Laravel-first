@extends("layouts.theme");
@section("content")
<a href="/articles">View all articles</a>

<form method="POST"  action="/articles/{{$articles->id}}">

@csrf
@method("PUT")
    <div class="form-group">
    <label for="">Article Title</label>
    <input type="text" value="{{$articles->title}}" name="title" class="form-control">
    </div>
    <div class="form-group">
    <label for="">Article Body</label>
    <textarea rows="" cols="" name="body" class="form-control">{{$articles->body}}
    </textarea>
    </div>
    <div class="form-group">
    <button class="btn btn-primary" >Save</button>  
    </div>


</form>



@endsection