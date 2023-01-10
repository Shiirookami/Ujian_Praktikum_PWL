<?php

namespace App\Http\Controllers;

use App\Http\Requests\GambarRequest;
use App\Models\ImageIdea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ImageIdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['gambar'] = ImageIdea::where('id','$image');
        return view('produk.index')->with('data') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['gambar'] = ImageIdea::all();
        return view('produk.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GambarRequest $request)
    {
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar')as $image ) {
                $img = $image->getClientPriginalName();
                $image->move(public_path().'/admin/',$img);
                $data[] = $img;
            }
        }
        $gmbr = new ImageIdea;
        $gmbr -> gambar = json_encode($data);
        $gmbr->save();
        Session::flash('status','data berhasil ditambahkan');
        return redirect()->route('produk.index');
    }
}
