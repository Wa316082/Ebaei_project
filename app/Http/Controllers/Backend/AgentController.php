<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::get();
        return view('backend.agent.agent_view', compact('agents'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|unique:agents,name',
            //'display_name'=>'required|unique:statuses,name'
        ]);

        if($validated){
            try {

                $agent = new Agent();
                $agent->name=$request->name;
//                $status->display_name=$request->display_name;
//                $status->posted_by=Auth::user()->id;
//                $status->updated_by=Auth::user()->id;
                $agent->save();

                return back()->with('success','Status Created Successfully !');

            } catch (Throwable $e) {
                return $e;
            }
        }
    }
}
