@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
@endsection

@section('content')
    <div class="products grid grid-cols-2">
        <table class="table w-full"  id="products_table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->price}}</td>
                        <td><button onclick="addToCart({{$product->id}})" {{ $product->stock == 0 ? "disabled" : ""}}>Add to cart</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pos" border=1>
        <table>
            <thead>
                <tr>
                    <th>Del</th>
                    <th>Qty</th>
                    <th>Nama Item</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody id="poscart">
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">Total: </td>
                    <td id="sum"></td>
                </tr>
            </tfoot>
        </table>
        <form action="/cashier" method="post">
            @csrf
            <input type="text" name="items_lists" id="items_lists" hidden/>
            <button class="bg-green-300 disabled:bg-black text-black font-bold py-2 px-4 rounded-full" id="checkout" type="submit" disabled>Konfirmasi Bayar</button>
        </form>
    </div>
@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#products_table').DataTable();
    } );

    const products = <?php echo json_encode($products) ?>;
    var items = <?php echo json_encode($products) ?>;
    //items is cart, zeroing all items.stock
    items.forEach((item) => item.stock = 0);

    function addToCart(pid){
        //check if selected item are already stocked in the cart
        var cart_item = items.find((item) => item.id === pid);
        if(!cart_item.stock && !(products.find((product) => {if(product.id == pid) return product.stock})).stock){
            cart_item.stock = 1;
        }
        else{
            if((cart_item.stock + 1) <= (products.find((product) => {if(product.id == pid) return product.stock})).stock){
                cart_item.stock++;
            }
        }
        updateForm();
        updateCart();
    }

    function removeFromCart(pid){
        var cart_item = items.find((item) => item.id === pid);
        console.log(cart_item);
        cart_item.stock--;
        console.log(cart_item);
        updateForm();
        updateCart();
    }

    function updateForm(){
        var form_value = "";
        $('#checkout').prop('disabled', true);
        items.forEach((item) => {
            if(item.stock > 0) form_value += (item.id + "#" + item.stock + "@" + (item.stock*item.price) + "/");
        });
        //test jquery
        $("#items_lists").val(form_value);

        //disable submit button if form_value is empty
        if(form_value != "") $('#checkout').prop('disabled', false);
    }

    function updateCart(){
        $("#poscart").empty();
        $('#sum').empty();
        var sum = 0;
        items.forEach((item) => {
            if(item.stock > 0){
                var temp = '<tr><td><button class="bg-gray-400 hover:bg-red-500 text-white font-bold rounded-full justify-center items-center" style="width: 100%" onclick="removeFromCart(' + item.id + ')">-</button></td><td><p>' + item.stock + '</p></td><td><p>' + item.name + '</p></td><td><p>' + item.price + '</p></td><td><p>' + (item.stock * item.price) + '</p></td></tr>';
                $('#poscart').append(temp);
                sum += (item.stock * item.price);
            }
        });
        //sum number format
        sum = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR'}).format(sum);
        $('#sum').append(sum);
    }
</script>
@endsection