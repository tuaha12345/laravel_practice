 @extends('layouts.layouts')
 @section('content')
      <!------------- first child------------>
      <div class="container">
           <div class="text-end">
            <a href="product/create" class="btn btn-dark my-3">New Product</a>
           </div>

      </div>

      <!-----------------table---------------->
      <div class="container">
      <table class="table table-hover mt-2">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($products as $data)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->description }}</td>
                <td>
                    <img src="products_img/{{ $data->image }}" alt="{{ $data->image }}" width="50" height="50" class="rounded-circle"/>
                </td>
                <td>
                    <a href="product/{{ $data->id }}/edit" class="btn btn-dark">Edit</a>
                    <a href="product/{{ $data->id }}/delete" class="btn btn-danger">Delete</a>
                    <a href="product/{{ $data->id }}/show" class="btn btn-info">Show</a>
                </td>
            </tr>
            @endforeach


        </tbody>
      </table>

      {{ $products->links()}}
      
      </div>  

@endsection