<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function via_service(Request $request)
    {
        $validated = $request->validate([
            'merchant' => 'required',

                ],
            );
        if( $validated)
        {
            $not_check_id = array_map('intval', explode(',',$request->order_not_checked));
            $explode_id = array_map('intval', explode(',',$request->order_checked));
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
                // dd($order);
                $order->merchant_id = $request->merchant;
                $order->save();
            }
            return back()->with('success', 'Service seted successfully !');
        }
    }
}
