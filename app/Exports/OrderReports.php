<?php

namespace App\Exports;


use App\Models\Order;
// use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderReports implements FromCollection
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
                    ->whereBetween('created_at',array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->get();

                    // dd('from all data');
        }

        elseif($this->dates != '' && $this->wabn != '' && $this->merchant_name == ''){
            $orders = Order::where('waybill_number',$this->wabn)
                    ->whereBetween('created_at',
                    array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->get();
                    // dd('from merchant name null and dates and wbn ace');
        }
        elseif($this->dates != '' && $this->wabn == '' && $this->merchant_name != ''){
            $orders = Order::where('merchant_id',$this->merchant_name)
                    ->whereBetween('created_at',
                    array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->get();
                    // dd('from wbn null and dates and merchant ace');


        }
        elseif($this->dates == '' && $this->wabn != '' && $this->merchant_name != ''){
            $orders = Order::where('waybill_number',$this->wabn)->where('merchant_id',$this->merchant_name)
                    ->get();
                    // dd('from wbn null and dates and merchant ace');


        }
        elseif($this->dates == '' && $this->wabn == '' && $this->merchant_name != ''){
            $orders = Order::where('merchant_id',$this->merchant_name)->get();
            // dd('from merchant ace and dates and wbn null');


        }
        elseif($this->dates == '' && $this->wabn != '' && $this->merchant_name == ''){
            $orders = Order::where('waybill_number',$this->wabn)->get();
            // dd('from wbn ace and dates and merchant null');


        }
        elseif($this->dates != '' && $this->wabn == '' && $this->merchant_name == ''){
            $orders = Order::whereBetween('created_at',
                array($this->from_date.' 00:00:00',  $this->to_date.' 23:59:59'))->with('country')->get();
            // dd('from dates ace and wbn and merchant null');

            // dd($orders);

        }


        return $orders;

    }

    public function map($orders):array
    {
        return[

            $orders->sender_name,
            $orders->country->name,

        ];
    }

    // public function headings(): array
    // {
    //     return ['id','Consignment_id','Order_id','customer_name','customer_mobile','delivery_address','delivery_address','actual_amount','collection_amount','pickup_location_id','coupon_id','customer_mobile','actual_amount','collection_amount','posted_on','posted_by'];
    // }
}
