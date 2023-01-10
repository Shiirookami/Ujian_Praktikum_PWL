@extends('layouts.master')

@section('content')
    <div class="main-content">
    <div class="title">
        Dashboard
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Responsive</h4>
                    </div>
                    <div class="card-body">
                        <p class="form-text mb-2">Datatables also provide responsive table</p>
                        <a href="{{route('produk.create')}}" class="btn btn-primary mb-2">Tambah</a>
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Gambar</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item => $produk)
                                <tr>
                                    <th scope="row">{{$item+1}}</th>
                                    <td>{{$produk->nama}}</td>
                                    <td>{{$produk->qty}}</td>
                                    <td>{{$produk->price}}</td>
                                    <td>
                                        @foreach($gambar as $image)
                                        <td>{{$image->id}}</td>
                                            <td> <?php foreach (json_decode($image->gambar)as $img) { ?>
                                                  <img src="{{ asset('/admin/'.$img) }}" style="height:120px; width:200px"/>
                                                 <?php } ?>
                                            </td>
                                         @endforeach
                                    </td>
                                    <td>
                                    <form action="{{route('produk.destroy',$produk->id)}}" method="post">
                                        <button type="button" class="btn btn-outline-secondary">
                                            <a href="{{route('produk.index')}}">Detail</a>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary">
                                            <a href="{{route('produk.edit',$produk->id)}}">Edit</a>
                                        </button>
                                        @csrf
                                        @method('delete')
                                            <button type="submit" class="btn btn-outline-success">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('js')
    <script src="{{asset('')}}admin/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('')}}admin/assets/js/page/index.js"></script>
@endpush
@push('datatables')
    <link href="{{asset('')}}admin/vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="{{asset('')}}admin/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />
@endpush
@push('js_datatables')
    <script src="{{asset('')}}admin/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('')}}admin/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}admin/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('')}}admin/assets/js/page/datatables.js"></script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('')}}admin/vendor/chart.js/dist/Chart.min.css">
@endpush
