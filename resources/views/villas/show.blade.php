@extends('layouts.app')

@section('content')
<div class="content-section ">
    <img src="{{ $villa->getFirstMediaUrl('villages') }}" style="height: 50vh;" class="w-100" alt="Single Hotel">

    <div class="container">
      <div class="top-content mt-4 border-bottom">

        <h2 class="text-primary">{{ $villa->name }}</h2>

        <p>
          {!! $villa->desciption !!}
        </p>

        <div class="border-top pt-2 ">
          <h3 class="text-primary">Villa Information</h3>
          <ul class="list-unstyled">
            <li>
              <span class="text-primary w-25">
                Address Details:
              </span>
              <span>
                {{ $villa->address_details }}
              </span>
            </li>

            <li>
              <span class="text-primary w-25">
                Place:
              </span>
              <span>
                {{ $villa->place->name }}
              </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="py-4">
        <h2 class="text-primary">Villa Gallery</h2>
        <div class="slider   slick-slider custom-slider border-bottom py-3">
            @foreach($villa->getMedia('village-gallery') as $img)

            <div><img src="{{ $img->getFullUrl() }}" class="img-fluid h-100" /></div>
        @endforeach
        </div>
      </div>



    </div>
  </div>
@endsection
