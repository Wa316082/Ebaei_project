<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        $merchants = Merchant::get();
        $agents= Agent::get();
        return view('backend.merchant.merchant_view', compact('merchants','agents'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|unique:merchants,name',
            //'display_name'=>'required|unique:statuses,name'
        ]);

        if($validated){
            try {

                $merchant = new Merchant();
                $merchant->name=$request->name;
                $merchant->agent_id=$request->agent_id;
//                $status->display_name=$request->display_name;
//                $status->posted_by=Auth::user()->id;
//                $status->updated_by=Auth::user()->id;
                $merchant->save();

                return back()->with('success','Status Created Successfully !');

            } catch (Throwable $e) {
                return $e;
            }
        }
    }

}
