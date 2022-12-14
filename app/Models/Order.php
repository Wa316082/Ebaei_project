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


}
