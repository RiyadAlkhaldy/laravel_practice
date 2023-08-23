@extends('index')
@section('content')
<form action="{{route('example.update',$test->id )}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="name" value="{{$test->name}}">
    <br>
    <td><a href="{{\Illuminate\Support\Facades\Storage::url($test->photo)}}"><img src="{{\Illuminate\Support\Facades\Storage::url($test->photo)}}" style="width: 100px;height: 50px"></a></td>

    <p>
        @error('name')
        the name is  {{$message}}
        @enderror
    </p>




    <textarea name="content" id="content" cols="30" rows="10" placeholder="Content" >{{$test->content}}</textarea>
    <br>
    <p>
        <input type="file" name="photo"/>
        <br>
        @error('content')
        the content is  {{$message}}
        @enderror
    </p>
    <input type="submit" value="update">
</form>
@endsection
