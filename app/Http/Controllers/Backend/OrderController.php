<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use Carbon\Carbon;
use App\Models\Agent;
use App\Models\Order;
use App\Models\Status;
use App\Models\Location;
use App\Models\Merchant;
use App\Imports\OrderImport;
use Illuminate\Http\Request;
use App\Exports\OrderReports;
use App\Models\OrderSatatusHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //============index function===============


    public function index()
    {

        $orders = Order::get();
        // dd($orders);
        $statuses = Status::get();
        return view('backend.orders.order_view',compact('orders','statuses'));
    }



    //===================create function===============

    public function create()
    {
        // dd('hello');
        $agents = Agent::get();
        $countries = Location::where('parent_id',0)->get();
        return view('backend.orders.order_create', compact('countries','agents'));
    }



    // =====================ajax merchant funtion=======================


    public function ajax_merchant($id)
    {
        $merchants = Merchant::where('agent_id',$id)->get();

        return response()->json([
            'merchants'=>$merchants
        ]);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            // 'agent'=>'sometimes',
            // 'merchant'=>'sometimes',
            // 'sender_name' => 'required',
            // 'sender_contact' => 'required',
            // 'sender_email' => 'required|email',
            // 'sender_country' => 'required',
            // 'sender_zone' => 'required',
            // 'sender_area' => 'required',
            // 'sender_post_code' => 'required',
            // 'sender_address' => 'required',
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
            'delivery_time' => 'required',
            'order_price' => 'required',
            'final_weight' => 'required',
        ]);
        // dd($request->all());


            try {
                $order = new Order;

                $order->user_id= Auth::user()->id;
                if($request->agent){
                    $order->agent_id=$request->agent;
                }else{
                    $order->agent_id=null;
                }
                if($request->merchant){
                    $order->merchant_id=$request->merchant;
                }else{
                    $order->merchant_id=null;
                }
                $order->sender_name=$request->sender_name;
                $order->sender_contact=$request->sender_contact;
                $order->sender_email=$request->sender_email;
                $order->sender_country_id=$request->sender_country;
                $order->sender_zone_id=$request->sender_zone;
                $order->sender_area_id=$request->sender_area;
                $order->sender_post_code=$request->sender_post_code;
                $order->sender_address=$request->sender_address;
                $order->reciever_name=$request->reciever_name;
                $order->reciever_contact=$request->reciever_contact;
                $order->reciever_email=$request->reciever_email;
                $order->reciever_country_id=$request->reciever_country;
                $order->reciever_zone_id=$request->reciever_zone;
                $order->reciever_area_id=$request->reciever_area;
                $order->reciever_post_code=$request->reciever_post_code;
                $order->reciever_address=$request->reciever_address;
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
                $order->product_id=$request->product_id;
                $order->product_type=$request->product_type;
                $order->pieces=$request->pieces;
                // $order->billing_id='';
                $order->length=$request->length;
                $order->height=$request->height;
                $order->width=$request->width;
                $order->gross_weight=$request->volume_weight;
                $order->final_weight=$request->final_weight;
                $order->remarks=$request->remarks;

                // dd($order);
                $order->save();


                return redirect()->route('order.view')->with('success','Order Successfully Created !');
            } catch (Throwable $e) {
                return $e ;
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
        if($request->dates != null){
            $arr_date = explode("-", $request->dates);
            $from_date = Carbon::parse($arr_date[0])->format('Y-m-d');
            $to_date = Carbon::parse($arr_date[1])->format('Y-m-d');
        }
        // dd($from_date,$to_date);

        try {
            if($request->dates != '' && $request->wabn != '' && $request->merchant_name != ''){
                $orders = Order::where('waybill_number',$request->wabn)->where('merchant_id',$request->merchant_name)
                        ->whereBetween('created_at',array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();

                        // dd('from all data');
            }

            elseif($request->dates != '' && $request->wabn != '' && $request->merchant_name == ''){
                $orders = Order::where('waybill_number',$request->wabn)
                        ->whereBetween('created_at',
                        array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();
                        // dd('from merchant name null and dates and wbn ace');
            }
            elseif($request->dates != '' && $request->wabn == '' && $request->merchant_name != ''){
                $orders = Order::where('merchant_id',$request->merchant_name)
                        ->whereBetween('created_at',
                        array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();
                        // dd('from wbn null and dates and merchant ace');


            }
            elseif($request->dates == '' && $request->wabn != '' && $request->merchant_name != ''){
                $orders = Order::where('waybill_number',$request->wabn)->where('merchant_id',$request->merchant_name)
                        ->get();
                        // dd('from wbn null and dates and merchant ace');


            }
            elseif($request->dates == '' && $request->wabn == '' && $request->merchant_name != ''){
                $orders = Order::where('merchant_id',$request->merchant_name)->get();
                // dd('from merchant ace and dates and wbn null');


            }
            elseif($request->dates == '' && $request->wabn != '' && $request->merchant_name == ''){
                $orders = Order::where('waybill_number',$request->wabn)->get();
                // dd('from wbn ace and dates and merchant null');


            }
            elseif($request->dates != '' && $request->wabn == '' && $request->merchant_name == ''){
                $orders = Order::whereBetween('created_at',
                    array($from_date.' 00:00:00',  $to_date.' 23:59:59'))->get();
                // dd('from dates ace and wbn and merchant null');


            }else{
                // dd('kicu nai');

                return back()->with('info','something went wrong p;ease try again');
            }


            return back()->with([
                'orders'=>$orders,
            ])->with('success','Order tracked !');

        } catch (Throwable $th) {
           return $th;
        }
    }



    //============ Track order function======

    public function track($id)
    {
        $histories = OrderSatatusHistory::where('order_id',$id)->with('status')->get();
        $lastStatus = $histories->last();

            // dd($lastStatus);
            $count = count($histories);
            $delivered = null;
            // dd($delivered);
            foreach($histories as $history){

                if($history->status->name == 'Delivered'){
                    $delivered = $history;
                }
            }
            // dd($delivered->status->name);


        $order= Order::find($id);

        $collection = new OrderSatatusHistory;
        $collection->histories = $histories;
        $collection->lastStatus = $lastStatus;
        $collection->count = $count;
        $collection->order = $order;
        $collection->delivered = $delivered;

        // $collections->push($collection);

        // dd($collection->lastStatus);

        // return view('backend.orders.order_tracking_details', compact('collection'));
        return view('demo_tracking', compact('collection'));

    }


    //tract from frontend

    public function multiple_track(Request $request)
    {
        $order_id=$request->waybill_number;

            $delimiters = ['.',',' ,'?', ' ','|'];
            $newOrderId = str_replace($delimiters, $delimiters[0], $order_id);//string seperate
            $array = explode($delimiters[0], $newOrderId);
            // dd($array);
            $collections = collect([]);
            foreach($array as $id){
            $order = Order::where('waybill_number', $id)->first();
            $histories = OrderSatatusHistory::where('order_id',$order->id)->with('status')->get();

            $lastStatus = $histories->last();
            $delivered = null;
            if($lastStatus !=null){
                $count = count($histories);
                foreach($histories as $history){

                    if($history->status->name == 'Delivered'){
                        $delivered = $history;
                    }
                }

            }

            $collectData = new OrderSatatusHistory;
            $collectData->histories = $histories;
            $collectData->delivered = $delivered;
            $collectData->lastStatus = $lastStatus;
            $collectData->order = $order;
            $collectData->count =  $count;

            $collections->push($collectData);



        }

        return view('landing_pages.tracking', compact('collections'));


    }




    //============function for order reports download===========


    public function reports()
    {

        $merchants = Merchant::get();
        return view('backend.orders.order_reports', compact('merchants'));
    }




    public function download(Request $request)
    {
        // dd($request->all());

            if($request->dates != ''  || $request->merchant_name != '' || $request->wabn != '' ){

                // dd('hello');
                $arr_date = explode("-", $request->dates);
                $from_date = Carbon::parse($arr_date[0])->format('Y-m-d');
                $to_date = Carbon::parse($arr_date[1])->format('Y-m-d');
                $merchant_name = $request->merchant_name;
                $wabn=$request->wabn;
                $dates =$request->dates;

                return Excel::download(new OrderReports($from_date, $to_date, $merchant_name, $wabn , $dates), 'report.xlsx');
            }else{
                return back()->with('info','Something went Wrong Please try again');
            }

    }




    public function operations()
    {
        $orders = Order::get();
        $merchants= Merchant::get();
        return view('backend.orders.operations',compact('orders','merchants'));
    }


    public function add_master_waybill(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'master_waybill' => 'required',

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
                $order->master_waybill = $request->master_waybill;
                $order->save();
            }
            return back()->with('success', 'Master Waybill Updated successfully !');
        }
    }


    public function cn_print($id)
    {
        $order = Order::find($id);
        return view('backend.orders.print_CN',compact('order'));
    }



    public function search(Request $request)
    {

        // $locations = Location::where('parent_id', 0)->get();
        // $substatuses = StatusGroup::get();
        // $statuses = Status::get();
        // $merchants = User::where('role_id',3)->get();
        // $orders = Order::get();
        // dd($orders);
        // dd($request->all());
        $statuses = Status::get();

        if($request->waybill_number != null && $request->dates == null){
            $order_id=$request->waybill_number;
            $delimiters = ['.',',' ,'?', ' ','|'];
            $newOrderId = str_replace($delimiters, $delimiters[0], $order_id);//string seperate
            $array = explode($delimiters[0], $newOrderId);
            $orders = Order::whereIn('waybill_number', $array)->paginate(10);
            $orders->appends($request->all());


        }elseif($request->waybill_number == null && $request->dates != null){

            $arr_date = explode("-", $request->dates);
            $from_date = Carbon::parse($arr_date[0])->format('Y-m-d');
            $to_date = Carbon::parse($arr_date[1])->format('Y-m-d');
            $orders = Order::whereBetween('created_at',array($request->from_date.' 00:00:00',  $request->to_date.' 23:59:59'))->paginate(10);
            $orders->appends($request->all());

        }elseif($request->waybill_number != null && $request->dates != null){
            $arr_date = explode("-", $request->dates);
            $from_date = Carbon::parse($arr_date[0])->format('Y-m-d');
            $to_date = Carbon::parse($arr_date[1])->format('Y-m-d');
            $order_id=$request->waybill_number;
            $delimiters = ['.',',' ,'?', ' ','|'];
            $newOrderId = str_replace($delimiters, $delimiters[0], $order_id);//string seperate
            $array = explode($delimiters[0], $newOrderId);
            $orders = Order::whereIn('waybill_number', $array)->whereBetween('created_at',array($request->from_date.' 00:00:00',  $request->to_date.' 23:59:59'))->paginate(10);
            $orders->appends($request->all());

        }
        else{
            return redirect()->back()->with('info','Search Not Match !');

        }

        if($orders != null){
            return view('backend.orders.order_view', compact('orders','statuses'))->with('success','Data successfully founded !');

        }else{
            return redirect()->back()->with('info','Search Not Match !');
        }



    }





    public function bulkentry(){
        return view('backend.orders.bulk_entry');

    }

    public function sqlupload(){
        return view('backend.orders.sql');

    }

    public function uploadbulkentry(Request $request){
        // dd($request->all());
        Excel::import(new OrderImport,request()->file('file'));

        return back()->with('success','CSV uploaded Successfully!');

    }

    public function uploadbulkentrysql(Request $request){
//     $data= request()->file('file')->getPathname();
//     dd($data);
//        dd($request->sql);s
        $arr_sql = explode(";", $request->sql);
//        dd($arr_sql);
        $count= count($arr_sql);
//        dd($count-1);
        if(strpos($request->sql, 'INSERT')!==true){
            for ($i=0; $i<$count-1; $i++ ){

                DB::statement($arr_sql[$i]);
            }
//            return redirect()->back()->with('success','Sql didnt implements successfully');
        }


//        DB::statement( $request->sql);

        return redirect()->back()->with('success','Sql implements successfully');

    }
}
