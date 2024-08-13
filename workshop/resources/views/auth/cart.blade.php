@extends('layout.master')

@section('content')

<!-- Content
============================================= -->
<div id="content">
    <div class="content-wrap">

        <div class="container">

            <div class="row gutter-40">
                <div class="col-xl-8">
                    <table class="table cart mb-0 rounded-6">
                        <thead>
                            <tr>
                                <th class="fw-normal cart-product-thumbnail">&nbsp;</th>
                                <th class="fw-normal cart-product-name">商品</th>
                                <th class="fw-normal cart-product-price">單價</th>
                                <th class="fw-normal cart-product-quantity">數量</th>
                                <th class="fw-normal cart-product-subtotal">總價</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td class="cart-product-thumbnail">
                                    <a href="#" class="position-relative">
                                        <img class="border-0" width="64" height="64" src="demos/skincare/images/single/gallery/1.jpg" alt="...">
                                            <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center">
                                            <span class="visually-hidden">Remove Product</span>&times;
                                        </span>
                                    </a>
                                </td>

                                <td class="cart-product-name">
                                    <a class="fw-normal" href="#">產品C</a>
                                </td>

                                <td class="cart-product-price">
                                    <span class="amount">$19.99</span>
                                </td>

                                <td class="cart-product-quantity cart cart-border cart-border-2">
                                    <div class="quantity">
                                        <button type="button" class="minus"><i class="uil uil-minus" style="background-color: #3041;"></i></button>
                                        <input type="number" step="1" min="1" name="quantity" value="2" title="Qty" class="qty border-0">
                                        <button type="button" class="plus"><i class="uil uil-plus" style="background-color: #3041;"></i></button>
                                    </div>
                                </td>

                                <td class="cart-product-subtotal">
                                    <span class="amount">$39.98</span>
                                </td>
                            </tr>
                            <tr class="cart_item">

                                <td class="cart-product-thumbnail">
                                    <a href="#" class="position-relative">
                                        <img class="border-0" width="64" height="64" src="demos/skincare/images/products/14.jpg" alt="...">
                                            <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center">
                                            <span class="visually-hidden">Remove Product</span>&times;
                                        </span>
                                    </a>
                                </td>

                                <td class="cart-product-name">
                                    <a class="fw-normal" href="#">產品A</a>
                                </td>

                                <td class="cart-product-price">
                                    <span class="amount">$24.99</span>
                                </td>

                                <td class="cart-product-quantity cart cart-border cart-border-2">
                                    <div class="quantity">
                                        <button type="button" class="minus"><i class="uil uil-minus" style="background-color: #3041;"></i></button>
                                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty border-0">
                                        <button type="button" class="plus"><i class="uil uil-plus" style="background-color: #3041;"></i></button>
                                    </div>
                                </td>

                                <td class="cart-product-subtotal">
                                    <span class="amount">$24.99</span>
                                </td>
                            </tr>
                            <tr class="cart_item">

                                <td class="cart-product-thumbnail">
                                    <a href="#" class="position-relative">
                                        <img class="border-0" width="64" height="64" src="demos/skincare/images/products/15.jpg" alt="...">
                                        <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center"><span class="visually-hidden">Remove Product</span>&times;</span>
                                    </a>
                                </td>

                                <td class="cart-product-name">
                                    <a class="fw-normal" href="#">產品B</a>
                                </td>

                                <td class="cart-product-price">
                                    <span class="amount">$13.99</span>
                                </td>

                                <td class="cart-product-quantity cart cart-border cart-border-2">
                                    <div class="quantity">
                                        <button type="button" class="minus"><i class="uil uil-minus" style="background-color: #3041;"></i></button>
                                        <input type="number" step="1" min="1" name="quantity" value="3" title="Qty" class="qty border-0">
                                        <button type="button" class="plus"><i class="uil uil-plus" style="background-color: #3041;"></i></button>
                                    </div>
                                </td>

                                <td class="cart-product-subtotal">
                                    <span class="amount">$41.97</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td colspan="2">
                                    <div class="row gx-2">
                                        <div class="col-md-8">
                                            <input type="text" value="" class="form-control rounded-0 bg-color-2 text-center text-md-start" placeholder="輸入優惠代碼..">
                                        </div>
                                        <div class="col-md-4 mt-3 mt-md-0">
                                            <a href="#" class="button button-small button-border border-color m-0 color h-bg-color h-text-light" style="--cnvs-btn-padding-y:7px;line-height:22px;">確認優惠代碼</a>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="3" class="text-md-end">
                                    <a href="#" class="button button-small button-3d button-border border-color mt-2 m-md-0 color h-bg-color h-text-light" style="background-color: #304109;">購物車更新</a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>

                <div class="col-xl-4 py-6">
                    <div class="grid-inner bg-color bg-opacity-10 p-5 rounded-6" style="background-color: #304109;">
                        <div class="row col-mb-30">
                            <div class="col-12">
                            <h4>結帳</h4>

                            <div class="table-responsive">
                                <table class="table cart cart-totals">
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <h5 class="mb-0">商品總金額</h5>
                                            </td>

                                            <td class="cart-product-name text-end">
                                                <span class="amount">$106.94</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <h5 class="mb-0">運費總金額</h5>
                                            </td>

                                            <td class="cart-product-name text-end">
                                                <span class="amount">60</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">
                                                <h5 class="mb-0">總付款金額</h5>
                                            </td>

                                            <td class="cart-product-name text-end">
                                                <span class="amount color lead fw-medium">$106.94</span>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            </div>

                            <div class="col-12">
                            <a href="shop.html" class="button button-small button-3d button-border border-color mt-2 m-md-0 color h-bg-color h-text-light" style="background-color: #304109;">下訂單</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #content end -->



@endsection