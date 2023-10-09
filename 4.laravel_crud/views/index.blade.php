<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/insert">
        @csrf
        @method('post')
        <input type="text" name="full_name" id="fullname" placeholder="Enter Full Name"><br>
        <input type="email" id="email" placeholder="Enter Email Address " name="email"><br>
        <input type="password" name="password" placeholder="Enter Password  "><br>
        <input type="submit"  name="submit" value  = "Submit">
    </form>

    <br>
    <br>
    <table  border="2">
        <thead>
            <th>Id</th>
            <th>Full Name:</th>
            <th>Email:</th>
            <th>Password</th>
            <th>Action</th>
        </thead>
        <tbody>
           
            @foreach ($user as $u)
                 <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->full_name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->password}}</td>
                    <td>
                        <a href="{{ URL::to('deleteRecords/'.$u->id) }}" >Delete</a>
                        <a href="{{ URL::to('editRecords/'.$u->id) }}" >Edit</a>
                    </td>
                 </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>