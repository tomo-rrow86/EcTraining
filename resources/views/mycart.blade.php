@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
            <div class="">
                <div class="d-flex flex-row flex-wrap">
                    {{session('user_id')}}
                    @foreach($session_cart as $value)
                        {{$value['stock_id']}} <br>
                        {{$value['quantity']}} <br>
                    @endforeach

                    @php
                    var_dump($session_cart);
                    @endphp
                </div>
                <div class="in_cart_area">
                <form action="{{ route('cart.destroy') }}" method="post">
                        @method('delete')
                        @csrf
                        <input type="submit" value="カートを空にする">
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection