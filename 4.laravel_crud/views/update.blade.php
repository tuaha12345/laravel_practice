<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ URL::to('update') }}">
        @csrf
        @method('post')
        <input type="text" name="full_name" id="fullname" placeholder="Enter Full Name" value="{{ $user_data->full_name }}"><br>
        <input type="email" id="email" placeholder="Enter Email Address " name="email" value="{{ $user_data->email }}"><br>
        <input type="password" name="password" placeholder="Enter Password " value="{{ $user_data->password }}"><br>
        <input type="hidden"  name="id" value  = "{{ $user_data->id }}">
        <input type="submit"  name="submit" value  = "Submit">
    </form>

</body>
</html>