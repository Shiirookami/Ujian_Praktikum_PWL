@extends('layouts.master')

@section('content')
    <div class="main-content">
    <div class="title">
        Data Guru
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Responsive</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="{{route('superadmin.guru.create')}}" class="btn btn-primary">Tambah</a>
                            <a href="#" class="btn btn-success">Export</a>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#importproduk">Import
                            </button>
                        </div>
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nidn</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item => $guru)
                                <tr>
                                    <th scope="row">{{$item+1}}</th>
                                    <td>{{$guru->nidn}}</td>
                                    <td>{{$guru->nama}}</td>
                                    <td>{{$guru->alamat}}</td>
                                    <td>
                                        {{-- <button type="button" class="btn btn-outline-secondary"
                                         data-toggle="modal"
                                            data-target="#getproduk"
                                            data-id="{{ $guru->nidn }}">
                                            Detail
                                        </button> --}}
                                        <a class="btn btn-outline-warning" href="{{route('superadmin.guru.edit', $guru->nidn)}}">Edit</a>
                                    <form action="{{route('superadmin.guru.destroy',$guru->nidn)}}" class="d-inline" method="post">
                                        @csrf
                                        @method('delete')
                                            <button type="button" onclick="deleteConfirmation('{{ $guru->nama}}')" class="btn btn-outline-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nidn</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th >Action</th>
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
{{-- Modal --}}
{{-- <div class="modal fade" id="importproduk" tabindex="-1" role="dialog" aria-labelledby="importprodukLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importprodukLabel">Import Pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file_pasien" required>
                            <label class="custom-file-label" for="file">Choose file...</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="getproduk" tabindex="-1" role="dialog" aria-labelledby="getprodukLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="getprodukLabel">Detail Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td id="nama">...</td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td id="qty">...</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td id="price">...</td>
                        </tr>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <td id="gambar">...</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@push('script')
    <script>
        $(".btnGetproduk").click(function() {
            var product_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ route('admin.guru.index') }}",
                data: {
                    'product_id'
                },
                success: function(data) {
                    data = data[0];
                    $("#nama").html(data.nama);
                    $("#qty").html(data.qty);
                    $("#price").html(data.price);
                    $("#gambar").html(data.gambar);
                    // $("#tanggal_lahir").html(data.tanggal_lahir);
                    // $("#jenis_kelamin").html(data.jenis_kelamin);
                    // $("#tanggal_masuk").html(data.tanggal_masuk);
                    // $("#golongan_darah").html(data.golongan_darah);
                    // $("#pekerjaan").html(data.pekerjaan);
                    // $("#warga_negara").html(data.warga_negara);
                    // $("#agama").html(data.agama);
                    // $("#status_pernikahan").html(data.status_pernikahan);
                    // $("#nama_kepala_keluarga").html(data.nama_kepala_keluarga);
                    // $("#pekerjaan_kepala_keluarga").html(data.pekerjaan_kepala_keluarga);
                    // $("#no_hp_orang_bertanggung_jawab").html(data.no_hp_orang_bertanggung_jawab);
                    // $("#status_asuransi").html(data.status_asuransi);
                    // $("#nama_kamar").html(data.kamar.nama_kamar);
                }
            });
        });
    </script>
@endpush --}}
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
