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
                <h4 class="card-title">Default form</h4>
                
                <form class="forms-sample" method="POST" action="{{route('update_profile', Auth::id() )}}">
                    
                  @csrf
                  
                  <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" class="form-control border-dark" name="username" value="{{ Auth::user()->username }}"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control border-dark" name="password" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" class="form-control border-dark" name="confirm_password" value="">
                  </div>

                
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  
                </form>
              </div>
            </div>
          </div>
    </div>


</div>

@endsection