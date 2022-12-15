<?php

namespace App\Http\Controllers\Backend;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{

    //==============Location create function============

    public function create()
    {
        return view('backend.location.location_add');
    }


    //==============ajax functions===========

    public function zone_get($id)
    {
        // dd($id);
        $zones = Location::where('parent_id',$id)->get();
        // dd($zones);
        return response()->json([
            'zones' => $zones,
        ]);
    }



    public function area_get($id)
    {
        // dd($id);
        $areas = Location::where('parent_id',$id)->get();
        // dd($zones);
        return response()->json([
            'areas' => $areas,
        ]);
    }




    //================location store function===========

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required'],
            'type' => 'required',

        ]);

        // dd($request->all());

        $location = new Location();
        if ($request->type == 'Country') {
            $location->parent_id = 0;
        }
        if ($request->type == 'Zone/Division/City') {
            $location->parent_id = $request->country_id;
        }
        if ($request->type == 'Area/Origin') {
            $location->parent_id = $request->zone_id;
        }
        // if ($request->type == 'Thana') {

        //     $location->parent_id = $request->district_get;
        // }
        // if ($request->type == 'Area') {
        //     $location->parent_id = $request->thana_get;
        // }
        $location->type = $request->type;
        $location->name = $request->name;
        $location->save();
        return redirect()->back()->with('success', 'Location Created Successfully !');
    }
}
