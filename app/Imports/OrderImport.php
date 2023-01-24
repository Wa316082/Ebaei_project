<?php

namespace App\Imports;

use App\Models\Location;
use App\Models\Merchant;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class OrderImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
        $sender_country_id = Location:: where('name', 'LIKE', "%{$row['sender_country_id']}%")->first();
        $sender_zone_id = Location:: where('name', 'LIKE', "%{$row['sender_zone_id']}%")->first();
        $sender_area_id = Location:: where('name', 'LIKE', "%{$row['sender_area_id']}%")->first();
        $reciever_zone_id = Location:: where('name', 'LIKE', "%{$row['reciever_zone_id']}%")->first();
        $reciever_area_id = Location:: where('name', 'LIKE', "%{$row['reciever_area_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
//        $merchant_id = Merchant:: where('name', 'LIKE', "%{$row['merchant_id']}%")->first();
        //dd($data->id);
        return new Order([

            'user_id' => Auth::user()->id,
            'agent_id' => $row['agent_id'],
            'merchant_id' => $merchant_id->id,
            'sender_name' => $row['sender_name'],
            'sender_contact' => $row['sender_contact'],
            'sender_email' => $row['sender_email'],
            'sender_country_id' => $sender_country_id->id,
            'sender_zone_id' => $sender_zone_id->id,
            'sender_area_id' => $sender_area_id->id,
            'sender_post_code' => $row['sender_post_code'],
            'sender_address' => $row['sender_address'],
            'reciever_name' => $row['reciever_name'],
            'reciever_contact' => $row['reciever_contact'],
            'reciever_email' => $row['reciever_email'],
            'reciever_zone_id' => $reciever_zone_id->id,
            'reciever_area_id' =>$reciever_area_id->id,
            'reciever_post_code' => $row['reciever_post_code'],
            'reciever_address' => $row['reciever_address'],
            'waybill_number' => $row['waybill_number'],
            'reference_number' => $row['reference_number'],
            'order_date' => $row['order_date'],
            'shipent_date' => $row['shipent_date'],
            'delivery_type' => $row['delivery_type'],
            'delivery_time' => $row['delivery_time'],
            'percel_type' => $row['percel_type'],
            'order_price' => $row['order_price'],
            'product_id' => $row['product_id'],
            'product_type' => $row['product_type'],
            'billing_id' => $row['billing_id'],
            'length' => $row['length'],
            'height' => $row['height'],
            'width' => $row['width'],
            'gross_weight' => $row['gross_weight'],
            'final_weight' => $row['final_weight'],
            'remarks' => $row['remarks'],
//            'pieces' => $row['pieces'],
//            'pieces' => $row['pieces'],
//            'pieces' => $row['pieces'],
//            'pieces' => $row['pieces'],
//            'pieces' => $row['pieces'],
//            'pieces' => $row['pieces'],
//            'pieces' => $row['pieces'],


        ]);
    }
}
