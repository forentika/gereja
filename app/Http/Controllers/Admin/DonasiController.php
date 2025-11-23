<?php

namespace App\Http\Controllers\Admin;
use App\Models\Donasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JumlahDonasi = Donasi::sum('jumlahdonasi');
        $allDonasi = Donasi::all();
        return view('donasi.donasi', compact('allDonasi', 'JumlahDonasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donasi.tambahdonasi');
 
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
            'namapemberi' => 'required',
            'tanggal' => 'required',
            'jenis' => 'required',
            'jumlahdonasi' => 'required',
            
        ]);

        $newDonasi = new Donasi;
        $newDonasi->namapemberi = $request->namapemberi;
        $newDonasi->tanggal = $request->tanggal;
        $newDonasi->jenis = $request->jenis;
        $newDonasi->jumlahdonasi = $request->jumlahdonasi;
        
        $newDonasi->save();
        return redirect("/admin/donasi")->with('status', 'Donasi Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($donasiId)
    {
        $donasi = Donasi::where('id', $donasiId)->first();
        return view('donasi.editdonasi', ['donasi'=>$donasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $donasiId)
    {
        $request->validate([
            'namapemberi' => 'required',
            'tanggal' => 'required',
            'jenis' => 'required',
            'jumlahdonasi' => 'required',
            
            
        ]);

        Donasi::where('id', $donasiId)
            ->update([
                'namapemberi'=>$request->namapeberi,
                'tanggal'=>$request->tanggal,
                'jenis'=>$request->jenis,
                'jumlahdonasi'=>$request->jumlahdonasi,                
                
            ]);
        return redirect('/admin/donasi')->with('status','jadwalibadah dengan id'.$donasiId.'berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($donasiId)
    {
        Donasi::where('id', $donasiId)->delete();

        return redirect('/admin/donasi')->with('status', 'donasi dengan id ' .$donasiId. ' berhasil dihapus');
    }
}
