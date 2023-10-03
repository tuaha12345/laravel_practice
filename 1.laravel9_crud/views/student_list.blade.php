<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
         <div class="row text-center">
            <h1>Student list</h1>
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
                
            @endif
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('addstudent') }}" class="btn btn-primary">Add</a>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                 
                    @foreach ($data as $d)
                    <tr>
                        <td scope="col">{{$i++}}</td>
                        <td scope="col">{{$d->name}}</td>
                        <td scope="col">{{$d->email}}</td>
                        <td scope="col">{{$d->phone}}</td>
                        <td scope="col">{{$d->address}}</td>
                        <td>
                            <a href="{{ url('edit/'.$d->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ url('delete/'.$d->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
         </div>
    </div>
    
</body>
</html>