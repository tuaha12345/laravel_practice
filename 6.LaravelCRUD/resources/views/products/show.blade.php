@extends('layouts.layouts')
@section('content')
      <!------------- first child------------>
      <div class="container text-center">
        <h1>Welcome from product page</h1>
      </div>

      
      <div class="container">
        <div class="row justify-content-center">
         <div class="col-sm-8">

        <div class="card mt-3 p-5">

                <div class="mb-3">
                  <h5>Name:</h5>
                  <p>{{ $pro->name }}</p>
                </div>

                <div class="mb-3">
                    <h5>Description:</h5>
                    <p>{{ $pro->description }}</p>
                </div>

                <div class="mb-3 ">
                    <img src="{{ asset('products_img/' . $pro->image) }}" alt="{{ $pro->image }}" width="100%" />
                </div>

           </div>

         </div>
        </div>
       </div>



@endsection