@extends('dashboard\master')

@section('content')

<div class="card col-lg-10 justify-content-center">
    <div class="card-body">
      <h3 class="my-5">Products Details and Testing Type</h3>
      
      <div class="uper my-4">
        @if(session()->get('error'))
          <div class="alert alert-danger">
            {{ session()->get('error') }}  
          </div><br />
        @endif

        <div class="uper my-4">
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}  
            </div><br />
          @endif

      <div class="table-responsive">
        <table class="table table-hover">
          <thead  >
            <tr style="border: 2.5px solid #949494; ">
              <th>S.No</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Testing Type</th>
              <th>Remarks</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($p_details as $products)
              <tr class="border-dark">
                <td>{{$products->id}}</td>
                <td>{{$products->product_name}}</td>
                <td>{{$products->category}}</td>
                <td>{{$products->testing_type}}</td>
                <td>{{$products->remarks}}</td>
                <td>
                  <form action="{{ route('delete_product', $products->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
              </tr>   
            @endforeach
            
            
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection