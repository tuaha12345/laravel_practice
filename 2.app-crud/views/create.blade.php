<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
            
        @endif
    </div>
    <form action="{{ route('product.store') }}" method="post" >
        @csrf
        @method('post')
       <div>
        <lavel>Name:</lavel>
        <input type="text" name="name" placeholder="Enter your name">
       </div>
       <div>
        <lavel>QTY:</lavel>
        <input type="text" name="qty" placeholder="Enter your qty">
       </div>
       <div>
        <lavel>Price</lavel>
        <input type="text" name="price" placeholder="price">
       </div>
       <div>
        <lavel>Description</lavel>
        <input type="text" name="description" placeholder="Description here">
       </div>
       <div>
        <input type="submit" name="submit" placeholder="save">
       </div>
    </form>
    
</body>
</html>