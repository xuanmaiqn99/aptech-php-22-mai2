

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container my-3">
        <div class="d-flex flex-row">
            <div class="col-12 px-0">
                <div class="d-flex flex-row align-items-center">
                    <div class="col-1 pl-0">
                        <form action="" method="">
                        <button class="btn btn-primary rounded-0 font-weight-bold">Home</button>
                        </form>
                    </div>
                    <div class="col-10">
                        <h1 class="text-center font-weight-bold text-uppercase">
                        user crud laravel
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>  
  <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="badge badge-success text-uppercase text-left">index page</span>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                        <th>#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="text-center">
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<hr>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase text-muted">
                    user crud laravel
                    </span>
                    <form action="" method="">
                    <button type="submit" class="btn text-uppercase font-weight-bold rounded-0">
                        create a new user
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

