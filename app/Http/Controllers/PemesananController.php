<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use Illuminate\Http\Request;
use DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.pemesanan', compact('pemesanan'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pemesanan = DB::table('pemesanan')
        ->where('nama','like',"%".$cari."%")->get();
        return view('admin.pemesanan', ['pemesanan' => $pemesanan]);
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
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'no_ktp' => 'required',
            'proyek' => 'required',
            'tipe' => 'required',
        ]);
        Pemesanan::create($request->all());
        return view('beranda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        return view('admin.pemesanan', compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        Pemesanan::destroy($pemesanan->id);
        return redirect('pemesanan')->with('status','Pemesanan Berhasil Dihapus!');
    }

    public function ubahStatus(Request $request)
    {
        $pesan = Pemesanan::find($request->id);
        if($pesan->status == 1){
            $pesan->status = 0;
            $pesan->save();
            return redirect('pemesanan')->with('status', 'Status berhasil diubah');
        } else {
            $pesan->status = 1;
            $pesan->save();
            return redirect('pemesanan')->with('status', 'Status berhasil diubah');
        }
    }


}
