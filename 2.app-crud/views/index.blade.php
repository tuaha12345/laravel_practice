<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index page</h1>

    @if (Session()->has('success'))
    <div >
        {{ Session('success') }}
    </div>
        
    @endif
    <table border="2">
         <thead>
            <th>Id</th>
            <th>Name</th>
            <th>qty</th>
            <th>price</th>
            <th>description</th>
            <th>Edit</th>
            <th>Delete</th>
         </thead>

         <tbody>
            @foreach ($data as $d)
                 
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->name }}</td>
                <td>{{ $d->qty }}</td>
                <td>{{ $d->price }}</td>
                <td>{{ $d->description }}</td>
                <td>
                    <a href="{{route('product.edit',['product_need_to_edit'=>$d]) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('product.delete',['id_of_deleted_product'=>$d]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
                  
            @endforeach
            
         </tbody>
    </table>
    
</body>
</html>