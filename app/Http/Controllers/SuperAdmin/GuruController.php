<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdukRequest;
use App\Models\Guru;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Guru::all();
        // dd('$data');
        return view('superadmin.guru.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['items'] = Guru::all();
        return view('superadmin.guru.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request)
    {
        $data = $request->all();
        Guru::create($data);
        Session::flash('status','data berhasil ditambahkan');
        return redirect()->route('superadmin.guru.index');
    }
    // public function addimage(Request $request)
    // {
    //     $this->validate($request,[
    //         'gambar' => 'required',
    //         'gambar.*' => 'image|mimes:jpeg,jpg,png,jfif,gif,svg|max:5080'
    //     ]);
    //     if ($request->hasFile('gambar')) {
    //         foreach ($request->file('gambar')as $image ) {
    //             $img = $image->getClientPriginalName();
    //             $image->move(public_path().'/admin/',$img);
    //             $data['items'] = $img;
    //         }
    //     }
    //     $gmbr = new Produk();
    //     $gmbr -> gambar = json_encode($data);
    //     $gmbr->save();
    //     Session::flash('status','data berhasil ditambahkan');
    //     return back();
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['edits'] = Guru::findOrFail($id);
        return view('superadmin.guru.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, $id)
    {
        $data = $request->all();
        $edit = Guru::findOrFail($id);
        $edit ->update($data);
        Session::flash('status','Data berhasil diubah');
        return redirect()->route('superadmin.guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Guru::findOrFail($id);
        $prod -> delete();
        Session::flash('hapus','berhasil menghapus data');
        // return redirect()->route('admin_user.produk.index');
        return redirect()->back();
    }
}
