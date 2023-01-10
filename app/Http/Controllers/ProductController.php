<?php

namespace App\Http\Controllers;

use App\Http\Requests\GambarRequest;
use App\Http\Requests\ProdukRequest;
use App\Models\ImageIdea;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['gambar'] = ImageIdea::where('id','$image');
        $data['items'] = Product::all();
        return view('produk.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['gambar'] = ImageIdea::where('id','$image');
        $data['items'] = Product::all();
        return view('produk.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request,GambarRequest $image)
    {
        $data = $image->all();
        $data = $request->all();
        Product::create($data);
        Session::flash('status','data berhasil ditambahkan');
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['edits'] = Product::findOrFail($id);
        return view('produk.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, $id)
    {
        $data = $request->all();
        $edit = Product::findOrFail($id);
        $edit ->update($data);
        Session::flash('status','Data berhasil diubah');
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::findOrFail($id);
        $prod -> delete();
        Session::flash('hapus','berhasil menghapus data');
        return redirect()->route('produk.index');
    }
}
