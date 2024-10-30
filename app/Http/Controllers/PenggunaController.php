<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }

    public function getPengguna(){
        $response['data'] = Pengguna::all();
        $response['message'] = 'List Data Pengguna';
        $response['success'] = true;

        return response()->json($response, 200);
    }

    public function storePengguna(Request $request) {
        $input = $request->validate( [
            "nama" => "required|unique:penggunas",
            "email" => "required",
            "password" => "required"
        ]);

        //simpan
        $hasil = Pengguna::create($input);
        if($hasil){ 
            $response['success'] = true;
            $response['message'] = $request->nama."berhasil disimpan";
            return response()->json($response, 201); 
        }else {
            $response['success'] = false;
            $response['message'] = $request->nama."gagal disimpan";
            return response()->json($response, 400); 
        }
    }

    public function destroyPengguna( $id)
    {
        $pengguna = Pengguna::find($id);
        $hasil = $pengguna->delete();
        if($hasil){ 
            $response['success'] = true;
            $response['message'] = "Fakultas berhasil dihapus";
            return response()->json($response, 200); 
        }else {
            $response['success'] = false;
            $response['message'] = "Fakultas gagal dihapus";
            return response()->json($response, 400); 
        }
    }
}
