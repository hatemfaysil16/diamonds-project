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
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

                <h5 class="card-title text-center text-primary">Forget Password</h5>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                      placeholder="Enter email" name="email">

                    </div>



                    <div class="w-100 text-center">

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
