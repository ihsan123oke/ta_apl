<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\pages;
use App\Marketing;
use App\Proyek;
use App\Tipe;
use App\Promo;
use App\Pemesanan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $marketing = Marketing::all();
        $proyek = Proyek::all();
        $tipe = Tipe::all();
        $promo = Promo::all();
        $pemesanan = Pemesanan::all();
        return view('beranda', compact('marketing','proyek','tipe','promo'));
    }
    public function marketing()
    {
        $marketing = Marketing::all();
        return view('marketing', compact('marketing'));
    }

    public function tes()
    {
        return view('tes');
    }

    public function properti()
    {
        $tipe = Tipe::all();
        $proyek = Proyek::all();
        return view('properti', compact('tipe','proyek'));
    }
    public function kontak()
    {
        $tipe = Tipe::all();
        $proyek = Proyek::all();
        return view('kontak', compact('tipe','proyek'));
    }
    public function mkt_info(Marketing $marketing)
    {
        return view('marketing_info', compact('marketing'));
    }
    public function pyk_info(proyek $proyek)
    {
        $tipe = Tipe::all();
        return view('proyek_info', compact('proyek','tipe'));
    }
    public function prt_info(Tipe $tipe)
    {
        return view('properti_info', compact('tipe'));
    }
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
        $marketing = Marketing::all();
        $proyek = Proyek::all();
        $tipe = Tipe::all();
        $promo = Promo::all();
        $pemesanan = Pemesanan::all();
        return view('kontak', compact('proyek','tipe','promo','marketing','pemesanan'));
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

        {
            Mail::send('notif',[
                'nama' => $request->nama,
                'no_ktp' => $request->no_ktp,
                'proyek' => $request->proyek,
                'tipe' => $request->tipe,
                'created_at' => Pemesanan::all()->last()->created_at->format('m/d/Y')
            ], function($messege) use ($request)
            {
                $messege->subject('Selamat kamu telah terdaftar di pemesanan');
                $messege->from('ihsanr90@gmail.com', "Anugerah Pratama Lazuardi");
                $messege->to($request->email);

            } );
        }
        // $nama = $request->nama;
        // dd($nama);
        return redirect('ktk')->with('status','Pendaftaran Berhasil!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(pages $pages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pages $pages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(pages $pages)
    {
        //
    }

    public function simulasi(){
       return view('simulasi'); 
    }
}
