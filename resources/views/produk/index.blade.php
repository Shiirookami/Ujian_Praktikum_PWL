<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
            <a href="{{route('produk.create')}}" class="btn btn-primary mb-2">Tambah</a>
            <table class="table" bordered="10">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">qty</th>
                        <th scope="col">price</th>
                        <th scope="col">gambar</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item => $produk)
                    <tr>
                        <th scope="row">{{$item+1}}</th>
                        <td>{{$produk->nama}}</td>
                        <td>{{$produk->qty}}</td>
                        <td>{{$produk->price}}</td>
                        <td>{{$produk->image}}</td>
                        <td>
                        <form action="{{route('produk.destroy',$produk->id)}}" method="post">
                            <a href="product.detail">
                                <button class="btn btn-outline-primary">detail</button>
                            </a>
                                <button type="button" value="" class="btn btn-outline-secondary">
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
            </table>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</html>
