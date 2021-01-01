@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
            <div class="">
                <div class="d-flex flex-row flex-wrap">
                    商品一覧を出したい

                    @foreach($stocks as $stock)
                        {{$stock->name}} <br>
                        {{$stock->fee}}<br>
                        <img src="/image/{{$stock->imgpath}}" alt="" class="incart"><br>
                        {{$stock->detail}}<br>

                        <form action="mycart" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                            <input type="submit" value="カートに入れる">
                        </form>
                        
                        <a class="text-center" href="/mycart">ショッピングカート</a>
                        <a class="text-center" href="/">商品一覧へ</a>

                    @endforeach
                    {{$stocks->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection