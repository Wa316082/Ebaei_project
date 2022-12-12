<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Status;
use App\Models\Location;
use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Models\OrderSatatusHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //============index function===============


    public function index()
    {
        $orders = Order::get();
        $statuses = Status::get();
        return view('backend.orders.order_view',compact('orders','statuses'));
    }



    //===================create function===============

    public function create()
    {
        // dd('hello');
        $countries = Location::where('parent_id',0)->get();
        return view('backend.orders.order_create', compact('countries'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_name' => 'required',
            'sender_contact' => 'required',
            'sender_email' => 'required|email',
            'sender_country' => 'required',
            'sender_zone' => 'required',
            'sender_area' => 'required',
            'sender_post_code' => 'required',
            'sender_address' => 'required',
            'reciever_name' => 'required',
            'reciever_contact' => 'required',
            'reciever_email' => 'required|email',
            'reciever_country' => 'required',
            'reciever_zone' => 'required',
            'reciever_area' => 'required',
            'reciever_post_code' => 'required',
            'reciever_address' => 'required',
            'waybill_number' => 'required',
            'reference_number' => 'required',
            'order_date' => 'required',
            'shipment_date' => 'required',
            'shipment_type' => 'required',
            'perel_type' => 'required',
            'product_type' => 'required',
            'delivery_date' => 'required',
            'order_price' => 'required',
            'final_weight' => 'required',
        ]);
        // dd($request->all());

        if($validated){
            try {
                $order = new Order;

                $order->user_id= Auth::user()->id;
                $order->merchant_id=$request->merchant_name;
                $order->sender_name=$request->sender_name;
                $order->sender_contact=$request->sender_contact;
                $order->sender_email=$request->sender_email;
                $order->sender_country_id=$request->sender_country;
                $order->sender_zone_id=$request->sender_zone;
                $order->sender_area_id=$request->sender_area;
                $order->sender_post_code=$request->sender_post_code;
                $order->sender_address=$request->sender_address;
                $order->reciver_name=$request->reciever_name;
                $order->reciver_contact=$request->reciever_contact;
                $order->reciver_email=$request->reciever_email;
                $order->reciver_country_id=$request->reciever_country;
                $order->reciver_zone_id=$request->reciever_zone;
                $order->reciver_area_id=$request->reciever_area;
                $order->reciver_post_code=$request->reciever_post_code;
                $order->reciver_address=$request->reciever_address;
                // $order->latitude='';
                // $order->longitude='';
                $order->waybill_number=$request->waybill_number;
                $order->reference_number=$request->reference_number;
                $order->order_date=$request->order_date;
                $order->shipent_date=$request->shipment_date;
                $order->delivery_type=$request->shipment_type;
                $order->delivery_time=$request->delivery_date;
                $order->percel_type=$request->perel_type;
                $order->order_price=$request->order_price;
                $order->product_id='';
                $order->product_type=$request->product_type;
                // $order->billing_id='';
                // $order->length='';
                // $order->height='';
                // $order->width='';
                // $order->gross_weight='';
                $order->final_weight=$request->final_weight;
                $order->remarks='';

                // dd($order);
                $order->save();


                return redirect()->route('order.view')->with('success','Order Successfully Created !');
            } catch (Throwable $e) {
                return $e ;
            }
        }else{
            dd('order pai nai');
        }




    }





    // ============== Tracking view function=========

    public function tracking()
    {
        $merchants = Merchant::get();
       return view('backend.orders.order_tracking',compact('merchants'));
    }



    //===========tracking search function============

    public function tracking_search(Request $request)
    {
        $arr_date = explode("-", $request->dates);
        $from_date = Carbon::parse($arr_date[0])->format('Y-m-d');
        $to_date = Carbon::parse($arr_date[1])->format('Y-m-d');
        // dd($from_date,$to_date);

        if($request->dates != '' && $request->wabn != '' && $request->merchant_name != ''){
            $orders = Order::where('waybill_number',$request->wabn)->where('merchant_id',$request->merchant_name)
                    ->whereBetween('created_at',array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();
        }

        elseif($request->dates != '' && $request->wabn != '' && $request->merchant_name == ''){
            $orders = Order::where('waybill_number',$request->wabn)
                    ->whereBetween('created_at',
                    array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();
        }
        elseif($request->dates != '' && $request->wabn == '' && $request->merchant_name != ''){
            $orders = Order::where('merchant_id',$request->merchant_name)
                    ->whereBetween('created_at',
                    array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();

        }
        elseif($request->dates == '' && $request->wabn != '' && $request->merchant_name != ''){
            $orders = Order::where('waybill_number',$request->wabn)->where('merchant_id',$request->merchant_name)
                    ->get();

        }
        elseif($request->dates == '' && $request->wabn == '' && $request->merchant_name != ''){
            $orders = Order::where('merchant_id',$request->merchant_name)->get();

        }
        elseif($request->dates == '' && $request->wabn != '' && $request->merchant_name == ''){
            $orders = Order::where('waybill_number',$request->wabn)->get();

        }
        elseif($request->dates != '' && $request->wabn == '' && $request->merchant_name == ''){
            $orders = Order::whereBetween('created_at',
                array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();

        }


        return back()->with([
            'orders'=>$orders,
        ])->with('success','Order tracked :)');
    }



    //============ Track order function======

    public function track($id)
    {
        $histories = OrderSatatusHistory::where('order_id',$id)->with('status')->get();
        // dd($histories);
        return view('backend.orders.order_tracking_details', compact('histories'));
    }
}
