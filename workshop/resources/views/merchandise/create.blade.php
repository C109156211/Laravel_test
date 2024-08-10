@extends('layout.master')

@section('content')

    <!-- Content -->
<section id="content">
    <div class="content-wrap">
        <div class="container">

            {{-- 錯誤訊息模板元件 --}}
            @include('components.errorMessage')

            <h1>{{ $title }}</h1>

            <div class="form-widget">

                <div class="form-result"></div>

                <div class="row shadow bg-light border">
                    <!-- 圖片預覽 -->
                    <div class="col-lg-4 dark" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)) center center / cover; min-height: 400px;">
                        <h3 class="text-center mt-5"></h3>
                        <div class="image-container text-center w-100 px-2">
                            <img id="preview-img" src="/path/to/default/image.png" alt="圖片預覽">
                            <label for="image-upload" class="upload-icon">+</label>
                            <input type="file" id="image-upload" style="display: none;" accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="col-lg-8 p-5">
                        <form>
                            @csrf
                            {{ method_field('PUT') }}
            
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="product-form-name">名稱</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" id="name" class="form-control required" value="" placeholder="新增商品名稱">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="product-form-price">價格</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="price" id="price" class="form-control required" value="" placeholder="新增商品價格">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="product-form-amount">數量</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="amount" id="amount" class="form-control required" value="" placeholder="新增商品總數量">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="product-form-status">狀態</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="btn-group d-flex" role="group">
                                            <input type="radio" class="btn-check required" name="product-form-status" id="product-form-status-C" value="C">
                                            <label for="product-form-status-C" class="btn btn-outline-dark font-body ls-0 text-transform-none">未上架</label>

                                            <input type="radio" class="btn-check required" name="product-form-status" id="product-form-status-S" value="S">
                                            <label for="product-form-status-S" class="btn btn-outline-dark font-body ls-0 text-transform-none">銷售中</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="product-form-type">類型</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <select class="form-select required" name="realestate-enquiry-property-type" id="realestate-enquiry-property-type">
                                                <option value="A商品">A商品</option>
                                                <option value="B商品">B商品</option>
                                                <option value="C商品">C商品</option>
                                                <option value="D商品">D商品</option>
                                                <option value="E商品">E商品</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="product-form-illustrate">說明</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <textarea name="illustrate" id="illustrate" class="form-control required" cols="30" rows="5" placeholder="新增商品說明"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-none">
                                <input type="text" id="fitness-form-botcheck" name="fitness-form-botcheck" value="">
                            </div>
                            <div class="col-12 d-flex justify-content-end align-items-center">
                                <div>
                                    <a href="/merchandise/manage">
                                        <button type="button" id="calories-trigger" class="btn btn-secondary">取消</button>
                                    </a>
                                </div>
                                <button type="submit" name="fitness-form-submit" class="btn btn-success ms-2">確認</button>
                            </div>

                            <input type="hidden" name="prefix" value="fitness-form-">
                            <input type="hidden" name="subject" value="New Fitness Received">
                            <input type="hidden" id="fitness-form-calories" name="fitness-form-calories" value="">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('preview-img');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
