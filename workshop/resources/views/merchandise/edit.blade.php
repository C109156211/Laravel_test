
@extends('layout.master')

@section('content')
<h1>{{ $title }}</h1>

{{-- 錯誤訊息模板元件 --}}
@include('components.errorMessage')


<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="form-widget">

                <div class="form-result"></div>

                <form class="row" id="checkout-form" action="include/form.php" method="post" enctype="multipart/form-data">
                    <div class="form-process">
                        <div class="css3-spinner">
                            <div class="css3-spinner-scaler"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row checkout-form-billing">
                            <div class="col-12">
                                <h3>商品資訊</h3>
                            </div>
                            <div class="col-12 form-group">
                                <label>商品名稱:</label>
                                <input type="text" name="checkout-form-billing-name" id="checkout-form-billing-name" class="form-control required" value="" placeholder="John Doe">
                            </div>
                            <div class="col-12 form-group">
                                <label>編號:</label>
                                <input type="email" name="checkout-form-billing-email" id="checkout-form-billing-email" class="form-control required" value="" placeholder="user@company.com">
                            </div>
                            <div class="col-6 form-group">
                                <label>代理商:</label><br>
                                <input type="text" name="checkout-form-billing-company" id="checkout-form-billing-company" class="form-control" value="" placeholder="Company Inc.">
                            </div>
                            <div class="col-12 form-group">
                                <label>商品價格:</label>
                                <input type="text" name="checkout-form-billing-street" id="checkout-form-billing-street" class="form-control required" value="" placeholder="修改金額$...">
                            </div>
                            <div class="form-group">
                                <label>商品說明:</label>
                                <textarea name="event-registration-bio" id="event-registration-bio" class="form-control required" cols="30" rows="5" placeholder="編輯說明..."></textarea>
                            </div>

                    <!-- checkout按鈕 -->
                    <div class="col-12">
                        <div class="form-group text-center">
                            <button type="submit" name="checkout-form-submit" class="btn btn-lg btn-secondary">確認修改</button>
                        </div>
                        <input type="hidden" name="prefix" value="checkout-form-">
                    </div>
                </form>

            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection