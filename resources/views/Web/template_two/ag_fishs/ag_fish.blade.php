@extends('Web.'.\WinwinAuth::currentWebCarrier()->template.'.layouts.app')

@section('css')
    <link rel="stylesheet" href="{!! asset('./app/'.\WinwinAuth::currentWebCarrier()->template.'/css/AG_fish.css') !!}"/>
@endsection

@section('header-nav')
    @include('Web.'.\WinwinAuth::currentWebCarrier()->template.'.layouts.index_nav')
@endsection

@section('content')
    <section id="myCarousel" class="carousel slide" data-riad="carousel" data-interval="2500">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            @forelse($images as $k => $v)
                <li data-target="#myCarousel" data-slide-to="{{$k}}" @if($loop->first)class="active"@endif></li>
            @empty
                <li data-target="#myCarousel" data-slide-to="0"></li>
            @endforelse
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            @forelse($images as $k => $v)
                <div class="item @if($loop->first) active @endif">
                    <a @if (!isset($v->url_type)) href="javascript:void(0)" @elseif($v->url_type == 0) href="{{$v->url_link}}" target="_blank" @elseif($v->url_type == 1) class="tx_login_game" href="{{$v->url_link}}" @endif style="background-image:url({{$v->imageAsset()}})"></a>
                </div>
            @empty
                <div class="item active">
                	<a href="javascript:void(0)" style="background-image:url({!! asset('./app/template_two/img/fish/banner1.jpg') !!})"></a>
                </div>
            @endforelse
        </div>
    </section>

    <section class="fish-main">
        <div class="main-wrap clearfix">
            <div class="tab-item fish1">
                <a class="tx_login_game" href="{!! url('players.joinElectronicGame/113') !!}"></a>
            </div>
            <div class="tab-item ml-20 fish2">
                <a class="tx_login_game" href="{!! url('players.joinElectronicGame/114') !!}"></a>
            </div>
        </div>
    </section>
@endsection

