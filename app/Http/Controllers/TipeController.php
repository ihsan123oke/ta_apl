<?php

namespace App\Http\Controllers;

use App\Tipe;
use App\Proyek;
use Illuminate\Http\Request;

class TipeController extends Controller
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
        $tipe = Tipe::all();
        $proyek = Proyek::get();
        return view('admin.tipe_rumah', compact('tipe','proyek'));
    }
    public function upload(){
        $tipe = Tipe::get();
        $proyek = Proyek::get();
		return view('admin.tambah_tipe',['tipe' => $tipe, 'proyek' => $proyek]);
	}
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'nama_tipe' => 'required',
            'deskripsi_tipe' => 'required',
            'lantai' => 'required',
            'kamar' => 'required',
            'kamar_mandi' => 'required',
            'ruang_keluarga' => 'required',
            'dapur' => 'required',
            'garasi' => 'required',
            'gudang' => 'required',
            'harga' => 'required'
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        $proyek = Proyek::all();
		Tipe::create([
            'file' => $nama_file,
            'proyek_id' => $request->proyek_id,
			'nama_tipe' => $request->nama_tipe,
			'deskripsi_tipe' => $request->deskripsi_tipe,
			'lantai' => $request->lantai,
			'kamar' => $request->kamar,
			'kamar_mandi' => $request->kamar_mandi,
			'ruang_keluarga' => $request->ruang_keluarga,
			'dapur' => $request->dapur,
			'garasi' => $request->garasi,
            'gudang' => $request->gudang,
            'harga' => $request->harga
		]);

        return redirect('proyek/tipe_rumah')->with('status','Tipe Rumah Berhasil Ditambahkan!');
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
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show(Tipe $tipe)
    {
        $proyek = Proyek::all();
        return view('admin.tipe_show',compact('proyek','tipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipe)
    {
        return view('admin.edit_tipe',compact('tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipe $tipe)
    {
        $request->validate([
            'file' => 'required',
			'nama_tipe' => 'required',
			'deskripsi_tipe' => 'required',
			'lantai' => 'required',
			'kamar' => 'required',
			'kamar_mandi' => 'required',
			'ruang_keluarga' => 'required',
			'dapur' => 'required',
			'garasi' => 'required',
            'gudang' => 'required',
            'harga' => 'required'
        ]);
        $file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        Tipe::where('tipe_id',$tipe->tipe_id)->update([
            'file' => $nama_file,
            'nama_tipe' => $request->nama_tipe,
            'deskripsi_tipe' => $request->deskripsi_tipe,
            'lantai' => $request->lantai,
            'kamar' => $request->kamar,
            'kamar_mandi' => $request->kamar_mandi,
            'ruang_keluarga' => $request->ruang_keluarga,
            'dapur' => $request->dapur,
            'garasi' => $request->garasi,
            'gudang' => $request->gudang,
            'harga' =>  $request->harga
        ]);
        return redirect('/proyek/tipe_rumah')->with('status','Tipe Rumah Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        Tipe::destroy($tipe->tipe_id);
        return redirect('proyek/tipe_rumah')->with('status','Tipe Rumah Berhasil Dihapus!');
    }
}
