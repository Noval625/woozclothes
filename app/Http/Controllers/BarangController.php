<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::get();
        return view('admin.produk.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'nama_barang' => ['required', 'string', 'max:100'],
            'harga_barang' => ['string', 'required'],
            'stok' => ['string', 'required'],
            'deskripsi' => ['string', 'required']
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YMD') . $file->getClientOriginalName();

            $file->move(public_path('upload/barang/'), $filename);
            $validatedData['image'] = $filename;
        }
        Barang::create($validatedData);
        return redirect('/admin/barang');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        
        return view('admin.produk.view', compact(['barang']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('admin.produk.edit', compact(['barang']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'nama_barang' => ['required', 'string', 'max:100'],
            'harga_barang' => ['string', 'required'],
            'stok' => ['string', 'required'],
            'deskripsi' => ['string', 'required']
        ]);

        if($request->hasFile('image')) {
            Storage::delete($barang->image);
            $file = $request->file('image');
            $filename = date('YMD') . $file->getClientOriginalName();

            $file->move(public_path('upload/barang'), $filename);
            $validatedData['image'] = $filename;
        }

       $barang->update($validatedData);

        return to_route('admin.produk.index')->with('success', 'produk created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Storage::delete($barang->image);
        $barang->delete();

    }
}
