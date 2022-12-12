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
    public function index()
    {
        $merchants=Merchant::get();
        $orders = Order::get();
        $statuses = Status::get();
        return view('backend.service.service',compact('orders','statuses','merchants'));
    }
}
