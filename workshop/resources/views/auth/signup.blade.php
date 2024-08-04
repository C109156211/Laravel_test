
<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master_signup') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap p-0">

    </div>

</section><!-- #content end -->


@endsection 
