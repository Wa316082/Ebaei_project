<?php

namespace App\Imports;

use App\Models\Order;
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
        return new Order([
            'agent_id' => $row['agent_id'],
            'merchant_id' => $row['merchant_id'],
            'sender_name' => $row['sender_name'],
            'sender_contact' => $row['sender_contact'],
            'sender_email' => $row['sender_email'],
            'sender_country_id' => $row['sender_country_id'],
            'sender_zone_id' => $row['sender_zone_id'],
            'sender_area_id' => $row['sender_area_id'],
            'sender_post_code' => $row['sender_post_code'],
            'sender_address' => $row['sender_address'],
            'reciever_name' => $row['reciever_name'],
            'reciever_contact' => $row['reciever_contact'],
            'user_id' => $row['user_id'],

        ]);
    }
}
