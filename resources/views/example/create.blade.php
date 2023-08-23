@extends('index')
<form action="{{route('example.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{old('name')}}">
    <br>
    <p>
        @error('name')
       the name is  {{$message}}
        @enderror
    </p>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Content"></textarea>
    <br>
    <p>
        <input type="file" name="photo"/>
        @error('content')
        the content is  {{$message}}
        @enderror
    </p>
    <input type="submit" value="create">
</form>
@push('message')
<script>
    // alert('you are create a new message ');
</script>
@endpush
