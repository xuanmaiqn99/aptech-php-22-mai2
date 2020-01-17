<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bai Thi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="w-75 mx-auto">
        <h1 class="text-center text-primary">ALL ARTICLES</h1>
        <div class="mb-2">
            <form action="{{route('articles.create')}}">
                <button type="submit" class="btn btn-success">ADDED NEW ARTICLE</button>
            </form>
        </div>
        <hr>
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <th>{{$article->title}}</th>
                            <td>{{$article->description}}</td>
                            <td>
                                <div class="d-flex">
                                        <form action="{{route('articles.show',$article->id)}}" method="GET">
                                                <button type="submit" class="btn-info">SHOW</button>
                                            </form>
                                            <form action="{{route('articles.edit',$article->id)}}" method="GET">
                                                <button type="submit" class="btn-warning">EDIT</button>
                                            </form>
                                            <form action="{{route('articles.destroy',$article->id)}}" method="POST">
                                                    <input type="hidden" name="_token" value="{{csrf_token() }}">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn-danger">DELETE</button>
                                            </form>
                                </div>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
       </div>
</body>
</html>

