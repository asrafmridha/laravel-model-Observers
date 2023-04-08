<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="row m-3">
        <div class="class col-md-6">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">logout</button>
            </form>
        </div>
    </div>
    <div class="container  mt-5">
        <button class="btn btn-primary">+Add New</button>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Category </th>
                <th scope="col">Slug</th>
                <th scope="col">Created by</th>
                <th scope="col">Updated by</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
                <tr></tr>
            </tbody>
        </table>
    </div>
  </body>
</html>
