@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
                <div class="">
                    <div class="d-flex flex-row flex-wrap">
                        @foreach($stocks as $stock)
                            <div class="col-xs-6 col-sm-4 col-md-4 ">
                                <div class="mycart_box">
                                    {{$stock->name}} <br>
                                    {{$stock->fee}}円<br>
                                    <img src="/image/{{$stock->imgpath}}" alt="" class="incart" >
                                    <br>
                                    {{$stock->detail}} <br>

                                        <form action="mycart" method="post">
                                            @csrf
                                            <div class="spinner_area">
                                                <div lang="ja" class="container mt-2">
                                                    <label for="number-of-unit" id="label-number-of-unit">個数</label>

                                                        <div class="input-group">

                                                            <div class="input-group-prepend">
                                                                <button type="button" aria-label="減らす" aria-describedby="label-number-of-unit" class="btn btn-outline-dark btn-number rounded-0" data-type="minus" data-field="unit">
                                                                -
                                                                </button>
                                                            </div><!-- end .input-group-prepend -->

                                                            <input type="number" id="number-of-unit" name="quantity" value="1" min="0" max="10" class="form-control input-number border-dark">

                                                            <div class="input-group-append">
                                                                <button type="button" aria-label="増やす" aria-describedby="label-number-of-unit" class="btn btn-outline-dark btn-number rounded-0" data-type="plus" data-field="unit">
                                                                +
                                                                </button>
                                                            </div><!-- end .input-group-append -->

                                                            </div><!-- end .input-group -->

                                                            <!-- 値の変更をスクリーンリーダーに伝達するライブリージョン。視覚的に冗長なので非表示にする。 -->
                                                            <div id="output-number-of-unit" class="sr-only" role="status" aria-live="polite"></div>

                                                            </div><!-- end .container -->
                                                </div>
                                            <div class="in_cart_area">
                                                <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                                <input type="submit" value="カートに入れる">
                                            </div>
                                        </form>
                                </div>
                                <a class="text-center" href="/">商品一覧へ</a>
                           </div>
                        @endforeach                    
                    </div>
                <div class="text-center" style="width: 200px;margin: 20px auto;">
                {{$stocks->links()}} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection