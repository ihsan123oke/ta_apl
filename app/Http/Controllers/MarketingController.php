<?php

namespace App\Http\Controllers;

use App\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
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
        $marketing = Marketing::all();
        return view('admin.marketing', compact('marketing'));
    }
    public function upload(){
        $marketing = Marketing::get();
		return view('admin.tambah_marketing',['marketing'=>$marketing]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'nama_marketing' => 'required',
			'email_marketing' => 'required',
			'jabatan' => 'required',
			'notlp_marketing' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Marketing::create([
			'file' => $nama_file,
			'nama_marketing' => $request->nama_marketing,
			'email_marketing' => $request->email_marketing,
			'jabatan' => $request->jabatan,
			'notlp_marketing' => $request->notlp_marketing,
		]);

		return redirect('marketing')->with('status','Marketing Berhasil Ditambahkan!');
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
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function show(Marketing $marketing)
    {
        return view('admin.marketing_show', compact('marketing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketing $marketing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marketing $marketing)
    {
        $request->validate([
            'file' => 'required',
			'nama_marketing' => 'required',
			'email_marketing' => 'required',
			'jabatan' => 'required',
			'notlp_marketing' => 'required',
        ]);
        $file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        Marketing::where('id',$marketing->id)->update([
            'file' => $nama_file,
            'nama_marketing' => $request->nama_marketing,
            'email_marketing' => $request->email_marketing,
            'jabatan' => $request->jabatan,
            'notlp_marketing' => $request->notlp_marketing,
        ]);
        return redirect('marketing')->with('status','Marketing Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketing $marketing)
    {
        Marketing::destroy($marketing->id);
        return redirect('marketing')->with('status','Marketing Berhasil Dihapus!');
    }
}
