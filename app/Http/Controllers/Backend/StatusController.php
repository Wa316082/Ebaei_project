<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses = Status::get();
        return view('backend.status.status_view', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|unique:statuses,name',
            'display_name'=>'required|unique:statuses,name'
        ]);

        if($validated){
            try {

                $status = new Status;
                $status->name=$request->name;
                $status->display_name=$request->display_name;
                $status->posted_by=Auth::user()->id;
                $status->updated_by=Auth::user()->id;
                $status->save();

                return back()->with('success','Status Created Successfully !');

            } catch (Throwable $e) {
                return $e;
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status = Status::find($id);
        return view('backend.status.status_edit',compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'=>'required|unique:statuses,name',
            'display_name'=>'required|unique:statuses,name'
        ]);

        if($validated){
            try {

                $status = Status::find($id);

                $status->name=$request->name;
                $status->display_name=$request->display_name;
                $status->posted_by=$request->posted_by;
                $status->updated_by=Auth::user()->id;
                $status->update();

                return redirect()->route('status.view')->with('success','Status Update Successfully !');

            } catch (Throwable $e) {
                return $e;
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Status::find($id)->delete();

        return back()->with('success','Status deleted successfully !');
    }
}
