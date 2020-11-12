@extends("layouts.theme");
@section("content")
<form method="POST"  action="/articles">

@csrf
    <div class="form-group">
    <label for="">Article Title</label>
    <input type="text" value="{{old('title')}}" name="title" class="form-control">
    @error("title")
    <p style="color:red">{{$errors->first("title")}}</p>
    @enderror
     <!-- @if ($errors->has("title"))
    <p style="color:red">{{$errors->first("title")}}</p>
    @endif -->
    </div>
    <div class="form-group">
    <label for="">Article Body</label>
    <textarea rows="" cols="" name="body" class="form-control">{{old('body')}}
    </textarea>
    @if ($errors->has("body"))
    <p style="color:red">{{$errors->first("body")}}</p>
    @endif

    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary" >Save</button>  
    </div>


</form>


@endsection