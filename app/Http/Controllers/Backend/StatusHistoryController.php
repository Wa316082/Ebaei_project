<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderSatatusHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StatusHistoryController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'status_checked' => 'required',
            'status_id' => 'required',
            // 'comments' => 'required',

                ],
            [
                'status_checked.required'=>'for update order status you have to check orders'
            ]);
        if( $validated)
        {
            $not_check_id = array_map('intval', explode(',',$request->status_not_checked));
            $explode_id = array_map('intval', explode(',',$request->status_checked));
            $array_data1 = array_unique($explode_id);
            if($array_data1[0] == 0)
            {
               $array_data= array_slice($array_data1, 1);

            }
            else{
                $array_data=$array_data1;
            }

            $not_array_checked1 = array_unique($not_check_id);
            if($not_array_checked1[0] == 0)
            {
               $not_array_checked= array_slice($not_array_checked1, 1);

            }
            else{
                $not_array_checked=$not_array_checked1;
            }
            $intersect = array_intersect($array_data, $not_array_checked);
            $filteredFoo = array_diff($array_data, $not_array_checked );



            foreach($filteredFoo  as $orders)
            {
                $order=Order::where('id',$orders)->first();
                $statushistory = new OrderSatatusHistory();

                if($request->proves != null){
                    //file save and new name
                    $prove_file = $request->proves;
                    // dd($prove_file);
                    // $name=$prove_file->getClientOriginalName();
                    // dd($name);
                    $file_name = $order->id.'-'.time().'.'.$prove_file->getClientOriginalExtension();
                        // dd($file_name);
                    $request->proves->move('upload/proves',$file_name );
                    $prove_file_url = 'upload/proves'.$file_name;
                    $statushistory->proves = $prove_file_url;
                }else{
                    $statushistory->proves = null;
                }

                $statushistory->order_id=$order->id;
                $statushistory->order_waybill=$order->waybill_number;
                $statushistory->status_id=$request->status_id;
                $statushistory->sender_country_id=$order->sender_country_id;
                $statushistory->sender_zone_id=$order->sender_zone_id;
                $statushistory->sender_area_id=$order->sender_area_id;
                $statushistory->remarks=$request->remarks;
                $statushistory->posted_on=Carbon::now();
                $statushistory->posted_by=Auth::user()->id;
                $statushistory->save();
            }
            return back()->with('success', 'Status updated successfully !');
        }

    }
}
