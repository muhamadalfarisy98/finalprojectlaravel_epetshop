<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use App\Product;
use App\Order;
use App\User;
use App\OrderDetail;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function pesan($id)
    {
        $produk = Product::where('id', $id)->first();
        $tanggal = Carbon::now();

        //cek validasia
        $cek_pesanan = Order::where('user_id', Auth::user()->id)->first();
        //simpan ke database pesanan

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->order_date = $tanggal;
        $order->status = 'draft';
        $order->total_harga = $produk->harga;
        $order->shipping_address = 'alamat default';
        $order->payment_id = '1';
        $order->kode_pesanan = mt_rand(100, 999);
        $order->save();
        // di form pemesanan ada alamat, paymentnya, jumlah barangnya



        //simpan ke database pesanan detail
        $pesanan_baru = Order::where('user_id', Auth::user()->id)->first();

        //cek pesanan detail
        // $cek_pesanan_detail = OrderDetail::where('product_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();
        // if (empty($cek_pesanan_detail)) {
        $pesanan_detail = new OrderDetail;
        $pesanan_detail->product_id = $produk->id;
        $pesanan_detail->order_id = $order->id;
        $pesanan_detail->jumlah_barang = 1;
        $pesanan_detail->jumlah_harga = $produk->harga;
        $pesanan_detail->save();
        // } else {
        //     $pesanan_detail = OrderDetail::where('product_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();

        //     $pesanan_detail->jumlah_barang = $pesanan_detail->jumlah_barang;

        //     //harga sekarang
        //     $harga_pesanan_detail_baru = $produk->harga * $pesanan_detail->jumlah_barang;
        //     $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $harga_pesanan_detail_baru;
        //     $pesanan_detail->update();
        // }

        //jumlah total
        $pesanan_baru->update();

        return view('pages.checkout', compact('produk'));
    }
    public function isicard($id)
    {
        $order = Order::where('user_id', $id);
        $orderdetail = OrderDetail::where('order_id', $order->id);
        return view('pages.co', compact('orderdetail'));
    }
}
