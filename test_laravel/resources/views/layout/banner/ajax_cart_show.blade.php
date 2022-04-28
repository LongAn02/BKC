<table class="table" id="loadCart">
    <tbody>
    @php
        use Illuminate\Support\Facades\Session;

        if (Session::has('cart')){
            $products = Session::get('cart');
            $count = 0;
            $sum_price = 0;
            @endphp
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Product image</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Product delete</th>
        </tr>
        </thead>
            @php
            foreach ($products as $key => $val){
    @endphp
        <tr>
            <th scope="row">{{++$count}}</th>
            <td>
                <img src="{{asset('assets/img/product/'.$val['product_image'].'.jpg')}}" alt=""
                     style="width: 50px;height: 50px;">
            </td>
            <td>{{$val['product_name']}}</td>
            <td>{{number_format($val['product_price']).' VNĐ'}}</td>
            <td>
                <button type="submit" class="btn btn-dark delete_shopping_cart" value="{{$val['session_id']}}">Xóa</button>
            </td>
        </tr>
    @php
            Session::put('count',$count);
            $sum_price += $val['product_price'];
          }
    @endphp
    <tr>
        <th colspan="3" class="ms-5">Tổng tiền :</th>
        <td colspan="2">{{number_format($sum_price).' VNĐ'}}</td>
    </tr>
    @php
        }else{
    @endphp
        <h1>Giỏ hàng trống</h1>
    @php
        }
    @endphp
    </tbody>
</table>






