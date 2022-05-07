<!-- start search box -->
<form action="{{ url()->current() === url('/') ? url('/search_results') :url(url()->current()) }}" method="get">

    <div class="input-group search">
      <input type="text" class="form-control h-100 border-0" value="{{ request()->name }}" name="name" placeholder="Ex: food, service, hotel">

      <div class="input-group-append">

        <select class="form-select search-dropdown" id="inputGroupSelect01" name="place">
            <option selected value=''>Where</option>
            @php
            $places = \App\Models\Place::all();
            foreach($places as $place) {
                $selected = request()->query('place') == $place->id ? 'selected' : '';
                echo " <option value='{$place->id}' {$selected}>{$place->name}</option>";
            }
        @endphp

          </select>


        <button class="btn search-btn" type="submit">Search</button>
      </div> <!-- end input-group-append -->


    </div>
</form>
<!-- end search box -->
