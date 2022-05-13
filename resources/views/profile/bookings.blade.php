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
          <th scope="col">Booking Reference</th>
          <th scope="col">Hotel Title</th>
          <th scope="col">Room Code</th>
          <th scope="col">Item Type</th>
          <th scope="col">Price</th>
          <th scope="col">Booking status</th>

        </tr>
      </thead>
      <tbody>
        @foreach($orders as $row)

        <tr>
          <th scope="row">{{ $row->order_ref }}</th>
          <td>{{ $row->hotel->name }}</td>
          <td>{{ $row->room->code }}</td>
          <td>Hotel Room</td>
          <td>${{ $row->price }}</td>
          <td>
            <span class="badge badge-warning">{{ $row->order_status == 1 ? 'Paid' : 'Pending' }}</span>

          </td>

        </tr>
        @endforeach




      </tbody>
    </table>
  </div>
</div>
<!-- End Content -->
@endsection
