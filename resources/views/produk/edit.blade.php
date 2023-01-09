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
                <form action="{{route('produk.update',$edits->id)}}" method="POST">
                    @csrf
                    @method('put')
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
                                <label for="basicInput" class="form-label">Qty</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="qty"
                                    value="{{$edits->qty}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basicInput" class="form-label">Price</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="price"
                                    value="{{$edits->price}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basicInput" class="form-label">Image</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="image"
                                    value="{{$edits->image}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn mb-2 icon-left btn-primary "><i
                        class="ti-plus"></i>Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
