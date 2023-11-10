<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\pengguna;


class PenggunaController extends Controller
{
    public function index()
    {
        $user = Pengguna::all();
        return view('pengguna.index', compact('user'));
    }

    // Api nya
    public function indexApi()
    {
        $user = Pengguna::all();
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kendaraan'=> 'required',
            'nomor_pelat'=> 'required',
            'tanggal_masuk'=> 'required',
            'tanggal_keluar'=> 'required',
            'status_pembayaran'=> 'required'
        ]);
        Pengguna::create($request->all());
        return redirect()->route('pengguna.index')
            ->with('success','Data berhasil di tambah' );

    }

    // mencari berdasarkan id
    public function showApi($id)
    {
        $user = Pengguna::find($id);
        return response()->json($user);
    }
    public function storeApi(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kendaraan'=> 'required',
            'nomor_pelat'=> 'required',
            'tanggal_masuk'=> 'required',
            'tanggal_keluar'=> 'required',
            'status_pembayaran'=> 'required'
        ]);
        $Pengguna = Pengguna::create($request->all());
        return response()->json($Pengguna, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       /* Show the form for editing the specified resource. */
    }

    public function edit(pengguna $data)
    {
        //
        return view('pengguna.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengguna $data)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            //Bisa tdk di tambah
            'jenis_kendaraan'=> 'required',
            'nomor_pelat'=> 'required',
            'tanggal_masuk'=> 'required',
            'tanggal_keluar'=> 'required',
            'status_pembayaran'=> 'required'
        ]);
        $data->update($request->all());
        return redirect()->route('pengguna.index')
            ->with('success','Data berhasil di tambah' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengguna $data)
    {
        //
      $data->delete();

        return redirect()->route('pengguna.index')
            ->with('success', 'Data  berhasil dihapus.');
    }

    public function detail(pengguna $data){
        return view('pengguna.show',compact('data'));

    }
    // public function detail(){
    //     return view('pengguna.show');
    // }
    
}
