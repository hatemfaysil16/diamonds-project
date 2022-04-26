@extends('admin.layouts.form')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Restaurants</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/restaurants">Restaurant</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Place</h3>
              </div>
                <div class="mt-2">
                    {{ Html::ul($errors->all()) }}
                </div>
                {{ Form::model($row, array('route' => array('restaurants.update', $row->id), 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data')) }}

                <div class="card-body">
                  <div class="form-group col-6 offset-3">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" data-default-file="{{ $row->getFirstMediaUrl('restaurants') }}" name="image" class="dropify" data-height="300" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $row->name }}" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ $row->description }}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address Details</label>
                  <textarea class="form-control" name="address_details" rows="3">{{ $row->address_details }}</textarea>
              </div>
              <div class="form-group">
                <div class="form-group col-2 px-0">
                  <label>Places</label>
                  <select name="place_id" class="form-control select2">
                    @foreach ($places as $place)
                      <option {{ ($place->id == $row->place_id) ? 'selected' : '' }} value="{{ $place->id }}">{{ $place->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="float-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
                {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection