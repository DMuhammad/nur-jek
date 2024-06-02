<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\OrderHistory;
use App\Models\User;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function index(User $user)
    {
        $orders = OrderHistory::with('driver')->where('user_id', $user->id)->get();
        return view('pages.history', compact('orders'), ['title' => 'Order History']);
    }

    public function store(Request $request)
    {
        $driver = Driver::where('id', $request->driver_id)->first();

        $order = OrderHistory::create([
            'user_id' => $request->user_id,
            'driver_id' => $request->driver_id,
            'pickup_address' => $request->pickup_address,
            'destination_address' => $request->destination_address,
            'rated' => $request->rated,
        ]);

        if ($order) {
            $driver->update([
                'order' => $driver->order + 1,
                'rating' => $driver->rating + $request->rated,
            ]);

            return redirect()->route('dashboard')->with('success', 'Order has been completed!');
        }
    }
}
