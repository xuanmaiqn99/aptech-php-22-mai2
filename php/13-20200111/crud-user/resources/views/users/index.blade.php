@foreach($users as $user)
{{$user->name}} <br>
@endforeach

@foreach($users as $user)
<h5> <a href="http://localhost:8000/users/{{$user->id}}">{{$user->name}}</a>
<a href="http://localhost:8000/users/{{$user->id}}/edit">  Edit </a></h5>

<form action="http://localhost:8000/users/{{$user->id}}/delete" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">DELETE</button>
</form>
@endforeach