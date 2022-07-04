{{-- @extends("dashboard.master")

@section('content')

<div class="card uper">
    <div class="h2 card-header">
      Edit Product Data
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif

        <div class="col-lg-12">
           
        </div>
    </div>
  </div>

@endsection --}}

@extends('dashboard\master')

@section('content')



<div class="container p-5">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif  
  </div>  
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Product Updation Form</h4>
                
                <form class="forms-sample" method="POST" action="{{route('update_product', $product_edit->id)}}">
                  @csrf
                  
                  <div class="form-group">
                    <label for="exampleInputUsername1">Product Name</label>
                    <input type="text" class="form-control border-dark" name="product_name" value="{{ $product_edit->product_name }}"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" class="form-control border-dark" name="category" value="{{  $product_edit->category }}">
                  </div>

                  <div class="form-group">
                    <label>Testing Type</label>

                    <div class="container p-3">
                      <div class="row my-4">
                        <div class="col-lg-12">
                          <input type="radio" class="" name="testing_type" value="Earth Testing" style=" transform:scale(2)" unchecked>
                          <label class="mx-2">Earth Testing</label>
                        </div>
                      </div>
  
                      <div class="row my-4">
                        <div class="col-lg-12 ">
                          <input type="radio" class="" name="testing_type" value="Resistance Testing" style=" transform:scale(2)" unchecked>
                          <label  class="mx-2">Resistence Testing</label>
                        </div>
                      </div>
  
                      <div class="row my-4">
                        <div class="col-lg-12">
                          <input type="radio" class="" name="testing_type" value="Leakage Testing" style=" transform:scale(2)" unchecked>
                          <label  class="mx-2">Leakage Testing</label>
                        </div>
                      </div>

                      <div class="row my-4">
                        <div class="col-lg-12">
                          <input type="radio" class="" name="testing_type" value="Not Tested Yet " style=" transform:scale(2)" unchecked>
                          <label  class="mx-2">Not Tested Yet</label>
                        </div>
                      </div>
                    </div>

                    

                  </div>

                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Remarks</label>
                    <input type="text" class="form-control border-dark" name="remarks" value="{{  $product_edit->remarks}}"/>
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  
                </form>
              </div>
            </div>
          </div>
    </div>


</div>

@endsection