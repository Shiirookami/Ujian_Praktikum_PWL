@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="title">
       Edit Produk
    </div>
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit</h4>
            </div>
            <div class="card-body">
                <form action="{{route('superadmin.guru.update',$edits->nidn)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basicInput" class="form-label">Nidn</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="nidn"
                                    value="{{$edits->nidn}}">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basicInput" class="form-label">Nama</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="nama"
                                    value="{{$edits->nama}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basicInput" class="form-label">alamat</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="alamat"
                                    value="{{$edits->alamat}}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn mb-2 icon-left btn-primary "><i
                        class="ti-plus"></i>Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
