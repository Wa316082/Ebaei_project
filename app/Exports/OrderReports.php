<?php

namespace App\Exports;


use App\Models\Order;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class OrderReports implements FromCollection, WithMapping , WithHeadings, ShouldAutoSize
{

    protected $from_date;
    protected $to_date;
    protected $merchant_name;
    protected $wabn;
    protected $dates;


    function __construct($from_date, $to_date, $merchant_name, $wabn, $dates)
    {
        $this->from_date=$from_date;
        $this->to_date=$to_date;
        $this->merchant_name=$merchant_name;
        $this->wabn=$wabn;
        $this->dates=$dates;

    }

    // private $colums = ['id','custom_order_id','given_order_id','customer_name','customer_mobile','delivery_address','delivery_address','actual_amount','collection_amount','pickup_location_id','coupon_id','customer_mobile','actual_amount','collection_amount','posted_on','posted_by'];

    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {

        // dd($this->user_id, $this->From ,$this->to);
        // return Order::where('user_id',$this->id)->get();
        if($this->dates != '' && $this->wabn != '' && $this->merchant_name != ''){
            $orders = Order::where('waybill_number',$this->wabn)->where('merchant_id',$this->merchant_name)
                    ->whereBetween('created_at',array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->with('zone')->with('country')->with('area')->get();

                    // dd('from all data');
        }

        elseif($this->dates != '' && $this->wabn != '' && $this->merchant_name == ''){
            $orders = Order::where('waybill_number',$this->wabn)
                    ->whereBetween('created_at',
                    array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->with('zone')->with('country')->with('area')->get();
                    // dd('from merchant name null and dates and wbn ace');
        }
        elseif($this->dates != '' && $this->wabn == '' && $this->merchant_name != ''){
            $orders = Order::where('merchant_id',$this->merchant_name)
                    ->whereBetween('created_at',
                    array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->with('zone')->with('country')->with('area')->get();
                    // dd('from wbn null and dates and merchant ace');


        }
        elseif($this->dates == '' && $this->wabn != '' && $this->merchant_name != ''){
            $orders = Order::where('waybill_number',$this->wabn)->where('merchant_id',$this->merchant_name)
                    ->with('zone')->with('country')->with('area')->get();
                    // dd('from wbn null and dates and merchant ace');


        }
        elseif($this->dates == '' && $this->wabn == '' && $this->merchant_name != ''){
            $orders = Order::where('merchant_id',$this->merchant_name)->with('zone')->with('country')->with('area')->get();
            // dd('from merchant ace and dates and wbn null');


        }
        elseif($this->dates == '' && $this->wabn != '' && $this->merchant_name == ''){
            $orders = Order::where('waybill_number',$this->wabn)->with('zone')->with('country')->with('area')->get();
            // dd('from wbn ace and dates and merchant null');


        }
        elseif($this->dates != '' && $this->wabn == '' && $this->merchant_name == ''){
            $orders = Order::whereBetween('created_at',
                array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->with('zone')->with('country')->with('area')->get();
            // dd('from dates ace and wbn and merchant null');

            // dd($orders);

        }


        return $orders;

    }

    public function map($orders):array
    {
        return[

            $orders->sender_name,
            $orders->sender_email,
            $orders->sender_contact,
            $orders->country->name,
            $orders->zone->name,
            $orders->area->name,
            $orders->sender_post_code,
            $orders->sender_address,
            $orders->reciver_name,
            $orders->reciver_email,
            $orders->reciver_contact,
            $orders->reciver_address,
            $orders->reciever_country->name,
            $orders->reciever_zone->name,
            $orders->reciever_area->name,
            $orders->waybill_number,
            $orders->reference_number,
            $orders->order_date,
            $orders->shipent_date,
            $orders->delivery_type,
            $orders->delivery_time,
            $orders->percel_type,
            $orders->order_price,
            $orders->product_type,
            $orders->final_weight,

        ];
    }

    public function headings(): array
    {
        return [
            'sender name',
            'sender email',
            'sender contact',
            'sender country name',
            'sender zone name',
            'sender area name',
            'sender address',
            'sender post code',
            'reciever name',
            'reciever email',
            'reciever contact number',
            'reciever address',
            'reciever country',
            'reciever zone',
            'reciever area',
            'waybill number',
            'reference number',
            'order placement date',
            'shipment date',
            'delivery type',
            'delivery time',
            'percel type',
            'order price',
            'product type',
            'final_weight',
        ];
    }
}
