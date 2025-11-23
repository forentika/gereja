<?php

namespace App\Http\Controllers\Admin;

use App\Models\Datajemaat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Contracts\Service\Attribute\Required;



class DatajemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allDatajemaat = Datajemaat::all();
        return view('jemaat.datajemaat', compact('allDatajemaat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jemaat.tambahdatajemaat');
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
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'sektor' => 'required',
            'statusbabtis' => 'required',
        ]);

        $newDatajemaat = new Datajemaat;
        $newDatajemaat->nama = $request->nama;
        $newDatajemaat->tanggallahir = $request->tanggallahir;
        $newDatajemaat->jeniskelamin = $request->jeniskelamin;
        $newDatajemaat->alamat = $request->alamat;
        $newDatajemaat->sektor = $request->sektor;
        $newDatajemaat->statusbabtis = $request->statusbabtis;
       

        $newDatajemaat->save();
        return redirect("/admin/datajemaat")->with('status', 'Datajemaat Berhasil ditambahkan');
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
    public function edit($datajemaatId)
    {
        $datajemaat = Datajemaat::where('id', $datajemaatId)->first();
        return view('jemaat.editdatajemaat', ['datajemaat'=>$datajemaat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $datajemaatId)
    {
        $request->validate([
            'nama' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'sektor' => 'required',
            'statusbabtis' => 'required',
        ]);

        Datajemaat::where('id', $datajemaatId)
            ->update([
                'nama'=>$request->nama,
                'tanggallahir'=>$request->tanggallahir,
                'jeniskelamin'=>$request->jeniskelamin,
                'alamat'=>$request->alamat,
                'sektor'=>$request->sektor,
                'statusbabtis'=>$request->statusbabtis,
                
            ]);
        return redirect('/admin/datajemaat')->with('status','datajemaat dengan id'.$datajemaatId.'berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($datajemaatId)
    {
        Datajemaat::where('id', $datajemaatId)->delete();

        return redirect('/admin/datajemaat')->with('status', 'datajemaat dengan id ' .$datajemaatId. ' berhasil dihapus');
    }

    public function search(Request $request)
    {
        $search = $request->query('search');
        $data = DataJemaat::where('nama', 'like', "%{$search}%")
            ->orWhere('alamat', 'like', "%{$search}%")
            ->paginate(10);
        return view('datajemaat', compact('data'));
    }
}