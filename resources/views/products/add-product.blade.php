@extends('dashboard\master')

@section('content')



<div class="container p-5">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Default form</h4>
                
                <form class="forms-sample" method="POST" action="{{route('product_created')}}">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Product Name</label>
                    <input type="text" name="product_name" class="form-control border-dark" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" name="category" class="form-control border-dark" >
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
                          <input type="radio" class="" name="testing_type" value="Not Tested Yet" style=" transform:scale(2)" unchecked>
                          <label  class="mx-2">Not Tested Yet</label>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Remarks</label>
                   <input type="text" name="remarks" class="form-control border-dark">
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  
                </form>
              </div>
            </div>
          </div>
    </div>


</div>

@endsection