<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function country()
    {
        return $this->belongsTo(Location::class, 'sender_country_id','id');
    }

    public function zone()
    {
        return $this->belongsTo(Location::class, 'sender_zone_id','id');
    }

    public function area()
    {
        return $this->belongsTo(Location::class, 'sender_area_id','id');
    }

    public function reciever_country()
    {
        return $this->belongsTo(Location::class, 'reciever_country_id','id');
    }

    public function reciever_zone()
    {
        return $this->belongsTo(Location::class, 'reciever_zone_id','id');
    }

    public function reciever_area()
    {
        return $this->belongsTo(Location::class, 'reciever_area_id','id');
    }


}
