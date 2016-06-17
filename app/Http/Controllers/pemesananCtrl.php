<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Produk;
use App\Pemesanan;
use Validator;
use Auth;
use UxWeb\SweetAlert\SweetAlert;

class pemesananCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // order user
    public function getOrder()
    {
        $list = Produk::select('kode_bunga', 'id_produk')->get();
        // print_r($list);
        // exit();
        return view('user.order', ['list_bunga'=>$list]);
    }
    // user post order
    public function postOrder(Request $request)
    {
        $validator = Validator::make($request->all(), Pemesanan::$rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $dataInput = [ 
                'produk_id'=>$request->input('kode_bg') ,
                'user_id'=>Auth::user()->id_user ,
                'keterangan'=>$request->input('ket_bg') ,
                'alamat_kirim'=>$request->input('alamat_kirim') ,
                'tgl_pengiriman'=>$request->input('tgl_kirim') ,
            ];
        // simpan ke db
        $cek = Pemesanan::create($dataInput);

        if ($cek) {
            SweetAlert::success('Berhasil memesan, silahkan tunggu sms dari admin.', 'Selamat')->autoclose(3000);
            return redirect()->route("order");
        }else{
                // jika user admin
            SweetAlert::error('Gagal pesan bungan', 'Maaf')->autoclose(3000);
            return redirect()->back()->withInput();
        }
    }
    // orderbyID
    public function getOrderById($id)
    {
        $pro = Produk::find($id);
        return view('user.order_by_id', ['produk', $pro]);
    }

    // ajax
    public function getKodeBg(Request $request)
    {
        $kode = $request->input('id_produk');
        $pro = Produk::find($kode);
        return response()->json($pro);
        // echo $kode;
    }
}
