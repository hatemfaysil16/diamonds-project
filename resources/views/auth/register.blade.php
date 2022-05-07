@extends('layouts.app')

@section('content')
<div class="content h-100">



    <!-- Start Form -->

    <div class="content-section d-flex align-items-center flex-column justify-content-center h-100 my-5">
      <div class="container">
        <div class="row w-100 justify-content-center">
          <div class="col-md-6 col-12 col-md-offset-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center text-primary">Register</h5>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">


                        @if ($errors->has('first_name'))
                      <span class="help text-danger">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                      @endif
                      </div>

                      <div class="form-group">
                        <label for="first_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">


                        @if ($errors->has('last_name'))
                      <span class="help text-danger">
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                      @endif
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                          placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                          else.</small>

                          @if ($errors->has('email'))
                      <span class="help text-danger">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">

                        @if ($errors->has('password'))
                      <span class="help text-danger">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                      </div>

                      <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                          placeholder="Confirm Password">

                          @if ($errors->has('password_confirmation'))
                      <span class="help text-danger">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                      @endif
                      </div>
                      <div class="w-100 text-center">

                        <button type="submit" class="btn btn-primary">Register</button>
                </form>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- End Form  -->

  </div>

@endsection
