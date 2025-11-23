<?php

namespace App\Http\Controllers\Admin;

use App\Models\Warta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Contracts\Service\Attribute\Required;

class WartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        return view('warta.dashboard');
    }

    public function index()
    {
        $allWarta = Warta::all();

        return view('warta.warta', compact('allWarta'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warta.tambahwarta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWartaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'keterangan'=>'required',
            'tanggal'=>'required',
            'photo'=>'required',
        ]);


        $file = $request->file('photo');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'Admin/photo';

        $file->move($tujuanFile,$namaFile);


        $newWarta = new Warta();
        $newWarta->judul =$request->judul;
        $newWarta->keterangan=$request->keterangan;
        $newWarta->tanggal=$request->tanggal;
        $newWarta->photo =$namaFile;

        $dokumenval = $request->pdf;
        if ($dokumenval) {
            $documentLaporanPath = public_path('assets/file-warta/');
            $documentNameLaporan = $dokumenval->getClientOriginalName();
            $i = 1;
            while (file_exists($documentLaporanPath . $documentNameLaporan)) {
                $documentNameLaporan = pathinfo($dokumenval->getClientOriginalName(), PATHINFO_FILENAME) . "($i)." . $dokumenval->getClientOriginalExtension();
                $i++;
            }
            $dokumenval->move($documentLaporanPath, $documentNameLaporan);
            $newWarta->pdf = $documentNameLaporan;
        }

        $newWarta->save();
        return redirect("/admin/warta")->with('status','Warta talah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function show(Warta $warta)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function edit($wartaId)
    {
        $warta = Warta::where('id', $wartaId)->first();
        return view('warta.editwarta', ['warta'=>$warta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWartaRequest  $request
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $wartaId)
    {
        $request->validate([
            'judul'=>'required',
            'keterangan'=> 'required',
            'tanggal'=> 'required',
            'photo'=> 'required',
        ]);

        $file = $request->file('photo');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'Admin/photo';

        $file->move($tujuanFile,$namaFile);

        $dokumenval = $request->pdf;
        if ($dokumenval) {
            $documentLaporanPath = public_path('assets/file-warta/');
            $documentNameLaporan = $dokumenval->getClientOriginalName();
            $i = 1;
            while (file_exists($documentLaporanPath . $documentNameLaporan)) {
                $documentNameLaporan = pathinfo($dokumenval->getClientOriginalName(), PATHINFO_FILENAME) . "($i)." . $dokumenval->getClientOriginalExtension();
                $i++;
            }
            $dokumenval->move($documentLaporanPath, $documentNameLaporan);
                Warta::where('id', $wartaId)
                ->update([

                    'judul'=> $request->judul,
                    'keterangan'=>$request->keterangan,
                    'tanggal'=>$request->tanggal,
                    'photo'=> $namaFile,
                    'pdf'=> $documentNameLaporan,
                ]);
            }else{
                 Warta::where('id', $wartaId)
                ->update([

                    'judul'=> $request->judul,
                    'keterangan'=>$request->keterangan,
                    'tanggal'=>$request->tanggal,
                    'photo'=> $namaFile,
                ]);
        }

        return redirect('/admin/warta')->with('status','Warta dengan id'.$wartaId.'berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function destroy($wartaId)
    {
        Warta::where('id', $wartaId)->delete();

        return redirect('/admin/warta')->with('status', 'warta dengan id ' .$wartaId. ' berhasil dihapus');
    }
}
