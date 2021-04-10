<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use App\Tipe;

class ProyekController extends Controller
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
        $proyek = Proyek::all();
        return view('admin.proyek', compact('proyek'));
    }
    public function upload(){
        $proyek = Proyek::get();
		return view('admin.tambah_proyek',['proyek'=>$proyek]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'nama_proyek' => 'required',
			'alamat_proyek' => 'required',
			'deskripsi_proyek' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Proyek::create([
			'file' => $nama_file,
			'nama_proyek' => $request->nama_proyek,
			'alamat_proyek' => $request->alamat_proyek,
			'deskripsi_proyek' => $request->deskripsi_proyek,
		]);

		return redirect('proyek')->with('status','Proyek Berhasil Ditambahkan!');
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
    public function show(proyek $proyek)
    {
        $tipe = Tipe::all();
        return view('admin.proyek_show',compact('proyek','tipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(proyek $proyek)
    {
        return view('admin.edit_proyek', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proyek $proyek)
    {
        $request->validate([
            'file' => 'required',
			'nama_proyek' => 'required',
			'alamat_proyek' => 'required',
			'deskripsi_proyek' => 'required',
        ]);
        $file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        proyek::where('proyek_id',$proyek->proyek_id)->update([
            'file' => $nama_file,
            'nama_proyek' => $request->nama_proyek,
            'alamat_proyek' => $request->alamat_proyek,
            'deskripsi_proyek' => $request->deskripsi_proyek,
        ]);
        return redirect('proyek')->with('status','Proyek Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(proyek $proyek)
    {
        Proyek::destroy($proyek->proyek_id);
        return redirect('proyek')->with('status','Proyek Berhasil Dihapus!');
    }
}
