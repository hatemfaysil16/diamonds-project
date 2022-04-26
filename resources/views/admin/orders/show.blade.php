@extends('admin.layouts.tables')

@section('table-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped">
                  <tbody>
                  <tr>
                      <th scope="row">Order REF</th>
                      <td>{{ $row->order_ref }}</td>
                  </tr>
                  <tr>
                      <th scope="row">Price</th>
                      <td>{{ $row->price }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Item Type</th>
                    <td class="text-uppercase">{{ $row->item_type }}</td>
                </tr>
                  <tr>
                      <th scope="row">Created At</th>
                      <td>{{ $row->created_at }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Status</th>
                    <td>
                      @if($row->order_status == 1)
                          <span class="badge col-lg-2 col-md-4 col-8 py-2 badge-primary">Pending</span>
                      @elseIf($row->order_status == 2)
                          <span class="badge col-lg-2 col-md-4 col-8 py-2 badge-danger">Processed</span>
                      @else
                          <span class="badge col-lg-2 col-md-4 col-8 py-2 badge-success">Paid</span>
                      @endif
                    </td>
                </tr>
        
                  </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection