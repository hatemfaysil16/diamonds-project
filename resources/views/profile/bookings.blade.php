@extends('layouts.dashboard')

@section('dashboard')
<!-- Start Content -->
<div class="col-12 d-flex d-inline justify-content-between pr-0">
  <h4 class="font-bold secondary">Your bookings</h4>
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
          <th scope="col">Booking status</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Hotel Title</td>
          <td>Hotel</td>
          <td>$12.00</td>
          <td>
            <span class="badge badge-warning">Pending</span>

          </td>

        </tr>


        <tr>
          <th scope="row">2</th>
          <td>Hotel Title</td>
          <td>Hotel</td>
          <td>$12.00</td>
          <td>
            <span class="badge badge-primary">Active</span>
          </td>

        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Hotel Title</td>
          <td>Hotel</td>
          <td>$12.00</td>
          <td>
            <span class="badge badge-info">Processed</span>

          </td>

        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Hotel Title</td>
          <td>Hotel</td>
          <td>$12.00</td>
          <td>
            <span class="badge badge-danger">Cancelled</span>

          </td>

        </tr>

      </tbody>
    </table>
  </div>
</div>
<!-- End Content -->
@endsection
