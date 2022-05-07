@extends('layouts.dashboard')

@section('dashboard')
<!-- Start Content -->
<div class="col-12 d-flex d-inline justify-content-between pr-0">
  <h4 class="font-bold secondary">Your cart</h4>
  <button class="btn d-xl-none pt-0" type="button" data-toggle="collapse" data-target="#example-collapse">
    <span class="navbar-light"><span class="navbar-toggler-icon"></span></span>
  </button>
</div>




<div class="row  mt-4">
  <div class="col-xl-12">

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Item Type</th>
          <th scope="col">Price</th>
          <th scope="col">Actions</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Hotel Title</td>
          <td>Hotel</td>
          <td>$12.00</td>
          <td>
            <button class="btn btn-danger">
              <i class="fa fa-trash"></i>
              Delete
            </button>
          </td>
        </tr>


        <tr>
          <th scope="row">2</th>
          <td>Hotel Title</td>
          <td>Hotel</td>
          <td>$12.00</td>
          <td>
            <button class="btn btn-danger">
              <i class="fa fa-trash"></i>
              Delete
            </button>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Hotel Title</td>
          <td>Hotel</td>
          <td>$12.00</td>
          <td>
            <button class="btn btn-danger">
              <i class="fa fa-trash"></i>
              Delete
            </button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <div class="col-xl-12">
    <div class="text-right">
      <button class="btn btn-success">
        Checkout $36
        <i class="fa fa-angle-double-right"></i>
      </button>
    </div>
  </div>
</div>
<!-- End Content -->
@endsection
