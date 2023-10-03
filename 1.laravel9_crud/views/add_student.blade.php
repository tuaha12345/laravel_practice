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
    <div class="container ">
        <div class="container-fluid text-center">
            <h1>Insert data</h1>
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
                
            @endif
        </div>
        <form method="POST" action="{{ url('save_student') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              @error('email')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                @error('address')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
            
            <button type="submit" class="btn btn-primary" >Submit</button>
            <a  class="btn btn-secondary" href="{{ url('student-list') }}">back</a>
          </form>
    </div>
</body>
</html>