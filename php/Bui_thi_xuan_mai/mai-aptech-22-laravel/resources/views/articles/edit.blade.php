<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="w-50 mx-auto">
        <h1 class="text-center text-primary">EDIT</h1>
        <form action="{{route('articles.update',$article->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    TITLE:
                    <input type="text" class="form-control" name="title" value="{{$article->title}}">
                </div>
                <div class="form-group">
                    Description:
                    <input type="text" class="form-control" name="description" value="{{$article->description}}">
                </div>
            <button type="submit" class="btn btn-success float-right">SUBMIT</button>
        </form>
    </div>
</body>
</html>
