<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<form class="my-3" method="post" action="/update">
    @csrf
    {{-- @method('post') --}}
    <input type="hidden" name="id" value="{{ $need_to_edit->id }}">
    Name: <input type="text" class="form-control" placeholder="Insert your name" name="name" value="{{ $need_to_edit['name'] }}"><br>
    password: <input type="text" class="form-control" placeholder="Insert your name" name="password" value="{{ $need_to_edit['password'] }}"><br>
    date: <input type="text" class="form-control" placeholder="Insert your date" name="date" value="{{ $need_to_edit['date'] }}"><br>
    <input class="btn btn-primary" type="submit" value="update">
    

 </form>

  </body>
</html>