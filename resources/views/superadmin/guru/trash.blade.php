<a href="{{route('admin_user.produk.create')}}" class="btn btn-primary mb-2">Tambah</a>
@foreach ($items as $item => $produk)
<tr>
    <th scope="row">{{$item+1}}</th>
    <td>{{$produk->nama}}</td>
    <td>{{$produk->qty}}</td>
    <td>{{$produk->price}}</td>
    <td>{{$produk->image}}</td>
    <td>
    <form action="{{route('admin_user.produk.destroy',$produk->id)}}" method="post">
        <a href="product.detail">
            <button class="btn btn-outline-primary">detail</button>
        </a>
            <button type="button" value="" class="btn btn-outline-secondary">
                <a href="{{route('admin_user.produk.edit',$produk->id)}}">Edit</a>
            </button>
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-success">delete</button>
        </form>
    </td>
</tr>
@endforeach
