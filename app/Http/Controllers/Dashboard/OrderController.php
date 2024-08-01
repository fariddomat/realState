<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::latest()->get();
        $data = ['orders' => $orders
    ];

        return response()->json($data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $json = $request->json()->all();

        Order::create([
            'user_id' => $json['user_id'],
            'property_id' => $json['property_id'],
            'message' => $json['message'],

        ]);

        return response()->json('added');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {$order=Order::find($id);
        if ($order) {

        return response()->json($order);
        }else{

            return response()->json(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order=Order::find($id);
        if ($order) {

        return response()->json($order);
        }else{

            return response()->json(404);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order=order::find($id);
        $json = $request->json()->all();

        $order->update([
            'user_id' => $json['user_id'],
            'property_id' => $json['property_id'],
            'message' => $json['message'],



        ]);
        return response()->json($order);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order=Order::find($id);
        $order->delete();
        return response()->json('deleted');
    }
}
