<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $order = new Order();
        $order->nama = $request->nama;
        $order->nohp = $request->nohp;
        $order->alamat = $request->alamat;
        $order->merk = $request->merk;
        $order->harga = $request->harga;
        $order->save();

        return "Data berhasil di ditambahkan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $nohp = $request->nohp;
        $alamat = $request->alamat;
        $merk = $request->merk;
        $harga = $request->harga;

        $order = Order::find($id);
        $order->nama = $request->nama;
        $order->nohp = $request->nohp;
        $order->alamat = $request->alamat;
        $order->merk = $request->merk;
        $order->harga = $request->harga;
        $order->save();

        return "Data berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        return "Data berhasil dihapus";
    }
}
