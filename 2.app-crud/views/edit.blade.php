<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
            
        @endif
    </div>
    <form action="{{ route('product.update',['product_need_to_be_updated'=>$p]) }}" method="post" >
        @csrf
        @method('put')
       <div>
        <lavel>Name:</lavel>
        <input type="text" name="name" placeholder="Enter your name" value="{{ $p->name }}">
       </div>
       <div>
        <lavel>QTY:</lavel>
        <input type="text" name="qty" placeholder="Enter your qty" value="{{ $p->qty }}">
       </div>
       <div>
        <lavel>Price</lavel>
        <input type="text" name="price" placeholder="price" value="{{ $p->price }}">
       </div>
       <div>
        <lavel>Description</lavel>
        <input type="text" name="description" placeholder="Description here" value="{{ $p->description}}">
       </div>
       <div>
        <input type="submit" name="submit" placeholder="save">
       </div>
    </form>
    
</body>
</html>