@extends('layouts.layouts')
@section('content')

      <!------------- first child------------>
      <div class="container text-center">
        <h1 class="text-danger text-center">Edit page</h1>
      </div>
  
      
      <div class="container">
        <div class="row justify-content-center">
         <div class="col-sm-8">

        <div class="card mt-3 p-5">
             
            <form method="POST" action="/product/{{$pro->id}}/update" enctype="multipart/form-data">
                <h3 class="text-muted">Product Edit #{{ $pro->name }}</h3>
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label  class="form-label">Enter you name:</label>
                  <input type="text" class="form-control" name="name"  value="{{ old('name',$pro->name) }}">
                  @if ($errors->has('name'))
                     <span class="text-danger">
                           {{ $errors->first('name') }}
                     </span>
                  @endif
                  
                </div>
                <div class="mb-3">
                  <label  class="form-label">Description</label>
                  <textarea class="form-control" placeholder="Description" name = "description" rows = "4" >{{ old('description',$pro->description) }}</textarea>
                  @if ($errors->has('description'))
                  <span class="text-danger">
                        {{ $errors->first('description') }}
                  </span>
                  @endif
                </div>
                <div class="mb-3 ">
                    <label  class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" value="{{old('image')}}"
                    @if ($errors->has('image'))
                    <span class="text-danger">
                          {{ $errors->first('image') }}
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark my-3">Submit</button>
              </form>
           </div>

         </div>
        </div>
       </div>




@endsection