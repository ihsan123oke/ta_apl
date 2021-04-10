<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
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
        $promo = Promo::all();
        return view('admin.promo', compact('promo'));
    }
    public function upload(){
        $promo = Promo::get();
		return view('admin.tambah_promo',['promo'=>$promo]);
    }
    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'nama_promo' => 'required',
			'deskripsi_promo' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Promo::create([
			'file' => $nama_file,
			'nama_promo' => $request->nama_promo,
			'deskripsi_promo' => $request->deskripsi_promo,
		]);

		return redirect('promo')->with('status','Promo Berhasil Ditambahkan!');
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
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        return view('admin.promo_show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $promo)
    {
        $request->validate([
            'file' => 'required',
			'nama_promo' => 'required',
			'deskripsi_promo' => 'required',
        ]);
        $file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        Promo::where('id',$promo->id)->update([
            'file' => $nama_file,
            'nama_promo' => $request->nama_promo,
            'deskripsi_promo' => $request->deskripsi_promo,
        ]);
        return redirect('promo')->with('status','Promo Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        Promo::destroy($promo->id);
        return redirect('promo')->with('status','Promo Berhasil Dihapus!');
    }
}
