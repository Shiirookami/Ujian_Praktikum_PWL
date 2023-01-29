@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="title">
        Form Element
    </div>
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h4>Default Form</h4>
            </div>
            <div class="card-body">
                <form action="{{route('superadmin.guru.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basicInput" class="form-label">nidn</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="nidn">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basicInput" class="form-label">nama</label>
                                <input
                                    type="text"
                                    placeholder="Input Here"
                                    class="form-control"
                                    name="nama">
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
                                    name="alamat">
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
