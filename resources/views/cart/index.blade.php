@extends('layouts.master',[
    'items'=>$items,
    'total'=>$total
])

@section('url')
<div id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="/home">Home</a></li>
            <li>Cart</li>
        </ul>
    </div>
    <!-- / container -->
</div>
@endsection

@section('content')
<!-- / body -->

<div id="body">
    <div class="container">
        <div id="content" class="full">
            <div class="cart-table">
                <table>
                    <tr>
                        <th class="items">Items</th>
                        <th class="price">Price</th>
                        <th class="qnt">Quantity</th>
                        <th class="total">Total</th>
                        <th class="delete"></th>
                    </tr>
                    @foreach ($cart as $i)
                    <tr>
                        <td class="items">
                            <div class="image">
                                <img src="/storage/{{$i->product->image}}" height="100px" alt="">
                            </div>
                            <h3><a href="/product/{{ $i->product->id }}">{{ $i->product->name }}</a></h3>
                            <p>{{ $i->product->description }}</p>
                        </td>
                        <td class="price">$ {{ $i->product->price }}</td>
                        <td class="qnt">
                            <form action="/cart/update/{{ $i->id }}">
                                <input class="quantity" name="quantity" type="number" min="1" max="10" value="{{ $i->quantity }}">
                                <input type="submit" value="Refresh">
                            </form>
                        </td>
                        <td class="total">{{ $i->product->price*$i->quantity }}</td>
                        <td class="delete"><a href="/cart/delete/{{ $i->id }}" class="ico-del"></a></td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="total-count">
                <h4>Subtotal: ${{ $total }}</h4>
                <p> @if ($total > 0)
                    +shippment: $10.00
                    @else
                                            
                    @endif
                </p>
                <h3>Total to pay: <strong>${{ $total + 10 }}</strong></h3>
                <a href="/purchase/checkout" class="btn-grey">Finalize and pay</a>
            </div>
    
        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->
@endsection