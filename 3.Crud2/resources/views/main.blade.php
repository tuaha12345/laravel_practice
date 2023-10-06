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
      <!-- navbar--->
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Laravel Crud Application</a>
              </li>         
            </ul>
          </div>
        </div>
      </nav>
  <!------------ modal ------------------------>
  <div class="w3-container">



    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <header class="w3-container w3-teal"> 
          <span onclick="document.getElementById('id01').style.display='none'" 
          class="w3-button w3-display-topright">&times;</span>
          <h2 class="text-center">Insert New Information Here:</h2>
        </header>
        <div class="w3-container">
         <form class="my-3" method="post" action="/crud">
            @csrf
            Name: <input type="text" class="form-control" placeholder="Insert your name" name="name"><br>
            password: <input type="text" class="form-control" placeholder="Insert your name" name="password"><br>
            date: <input type="text" class="form-control" placeholder="Insert your name" name="date"><br>
            <a class="btn btn-danger" href="/crud">Cancel</a>
            <input class="btn btn-primary" type="submit" value="Add">
            

         </form>
        </div>
  
        </footer>
      </div>
    </div>
  </div>
       
        

    <!----------- table ---------->
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">Date</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($members as $m)
                
            
          <tr>
            <th scope="row">{{ $m['id']}}</th>
            <td>{{ $m['name']}}</td>
            <td>{{ $m['password'] }}</td>
            <td>{{ $m['date']}}</td>
            <td>
              <a href="{{"edit/".$m['id']}}" class="text-white btn btn-success ml-2 pt-2"> Edit
            </a>
            <a href="{{"delete/".$m['id']}}" class="text-white btn btn-danger ml-2 pt-2"> Delete
            </a>
            </td>
          </tr>
         
          @endforeach
        </tbody>
      </table>



      {{-- <button data-loading-text="Loading............." class="btn btn-warning" type="button"
      data-toggle="modal" data-target="#my_modal">Add Student</button> --}}
    
      <button onclick="document.getElementById('id01').style.display='block'" 
      class="btn btn-warning">Add Student</button>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> 

