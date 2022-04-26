<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RestaurantController extends Controller
{

    public function index()
    {
        $rows = Restaurant::get();
        return view('admin.restaurants.index', compact('rows'));
    }


    public function create()
    {
        $places = Place::get();
        return view('admin.restaurants.create', compact('places'));
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name'              => ['required', 'string', 'max:255'],
            'description'       => ['required', 'string', 'max:2000'],
            'address_details'   => ['required', 'string', 'max:2000'],
            'image'             => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $restaurant = Restaurant::create([
            'name'              => $request['name'],
            'description'       => $request['description'],
            'address_details'   => $request['address_details'],
            'place_id'          => $request['place_id'],
        ]);

        $restaurant->addMediaFromRequest('image')->toMediaCollection('restaurants');


        Session::flash('result', 2);
        return redirect('/admin/restaurants');

    }

    public function edit($id)
    {
        $row = Restaurant::find($id);
        $places = Place::get();
        return view('admin.restaurants.edit', compact('row', 'places'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'description'       => $request['description'],
            'address_details'   => $request['address_details'],
            'place_id'          => $request['place_id'],
        ]);

        $restaurant->update($request->all());

        if($request->image){
            $restaurant->clearMediaCollection('restaurants');
            $restaurant->addMediaFromRequest('image')->toMediaCollection('restaurants');
        }

        Session::flash('result', 3); 
        return redirect('/admin/restaurants');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        Session::flash('result', 1); 
        return redirect('/admin/restaurants');
    }




}