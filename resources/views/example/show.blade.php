<form action="{{route('example.store')}}" method="post">
    @csrf
 <h3>{{$test->name}}</h3>
 <h3>{{$test->content}}</h3>
 <h3>{{$test->id}}</h3>
    <input type="submit" value="create">
</form>
