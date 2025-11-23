<?php

namespace App\Http\Controllers;
use App\Models\Datajemaat;
use Illuminate\Http\Request;

class DatajemaattampilanController extends Controller
{
    public function index()
    {
        $data = datajemaat::all();
    return view('tampilan.datajemaat', compact('data'));

    }
    public function search(Request $request)
    {
        $search = $request->query('search');
        $data = datajemaat::where('nama', 'like', "%{$search}%")
            ->orWhere('alamat', 'like', "%{$search}%")
            ->paginate(10);
        return view('tampilan.datajemaat', compact('data', 'search'));
    }

}
