@extends('layout.main')
@if(isset($data))
@section('metaShare')
<meta property="og:url"           content="http://www.dcgroup.mn/news/{{ $data->id }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $data->getTranslatedAttribute('title') }}" />
<meta property="og:description"   content="{{ $data->getTranslatedAttribute('excerpt') }}" />
<meta property="og:image"         content="{{ Voyager::image( $data->image ) }}" />
@stop
@section('content')
<section class="cover-background" data-parallax-background-ratio="0.5" style="background-image: url({{Voyager::image($data->image)}}); background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial;">
    <div class="opacity-extra-medium-2 bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 col-md-10 position-relative one-half-screen d-flex justify-content-end flex-column sm-h-400px">
                <h2 class="alt-font text-white font-weight-500 margin-5-half-rem-bottom w-85 lg-w-100">{{ $data->getTranslatedAttribute('title') }}</h2>
                <ul class=" list-unstyled">
                    <li class="d-block d-sm-inline-block margin-50px-right xs-margin-10px-bottom xs-no-margin-right">
                        <span class="text-white opacity-5 d-block">@lang('texts.author')</span>
                        <a href="" class="text-white alt-font">DC Group</a>
                    </li>
                    <li class="d-block d-sm-inline-block margin-50px-right xs-margin-10px-bottom xs-no-margin-right">
                        <span class="text-white opacity-5 d-block">@lang('texts.pdate')</span>
                        <a href="" class="text-white alt-font">{{ date('Y-m-d', strtotime($data->created_at)) }}</a>
                    </li>
                    <li class="d-block d-sm-inline-block margin-50px-right xs-no-margin-right">
                        <span class="text-white opacity-5 d-block">@lang('texts.category')</span>
                        <a href="/news/category/{{ $data->category_id }}" class="text-white alt-font">{{ $data->category->name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 last-paragraph-no-margin wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <p class="text-extra-dark-gray font-weight-500">{{ $data->getTranslatedAttribute('excerpt') }}</p>
                <p>{!! $data->getTranslatedAttribute('body') !!}</p>
            </div>
        </div>
    </div>
</section>

@stop
@endif
