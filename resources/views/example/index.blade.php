
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('index')
@extends('new')
@section('new')
    <h1>Reyath</h1>
@endsection
@section('content')
<table width="50%" style="" >
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Content</th>
        <th>Image</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>created at</th>
        <th>updated at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($test as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}} </td>

            <td> {{$data->content}}</td>
            <td><a href="{{\Illuminate\Support\Facades\Storage::url($data->photo)}}"><img src="{{\Illuminate\Support\Facades\Storage::url($data->photo)}}" style="width: 100px;height: 50px"></a></td>
            <td> <a href="example/{{$data->id}}">show</a>  </td>
            <td> <a href="example/{{$data->id}}/edit">Edit</a>  </td>
            <form action="{{route('example.destroy', $data->id )}}" method="post">
                @csrf
                @method('delete')
                <td>   <input type="submit" value="delete"/>   </td>
            </form>
            <td>{{$data->created_at}} </td>
            <td>{{$data->updated_at}} </td>


        </tr>
    @endforeach
    </tbody>
</table>
<div style="display:block; align-content:center ; align-items: center; alignment-baseline: center ">
    <a href="{{route('example.create')}}">create</a>
</div>
@endsection
</body>
</html>
