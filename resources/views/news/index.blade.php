@extends('layout.main')
@section('content')
<section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image: url({{asset('images/blogg.jpg')}}); background-position: 50% 0px;">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Мэдээлэл</h2>
                <h1 class="alt-font text-white opacity-6 margin-20px-top">Манай компанийн хамгийн их анхаарал татсан сүүлийн үеийн мэдээ, мэдээллийг эндээс..</h1>
            </div>
            <div class="down-section text-center"><a href="#blog" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
</section>
<section id="blog" class=" pt-0 padding-five-lr lg-no-padding-lr">

    <div class="container padding-50px-top">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-sm-10 blog-content lg-no-padding-lr">
                <ul class="blog-simple blog-wrapper grid grid-2col xl-grid-2col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large" style="position: relative; height: 3064.5px;">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    @if(isset($newslist))
                    @foreach($newslist as $data)
                    <li class="grid-item wow animate__fadeIn" style="position: absolute; left: 0%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <div class="blog-post box-shadow-small border-radius-6px">
                            <div class="blog-post-image cover-background xs-h-250px" style="background-image: url('{{Voyager::image($data->image)}}')">
                                <a href="/news/{{ $data->id }}" class="blog-post-image-overlay bg-dark-slate-blue"></a>
                            </div>
                            <div class="post-details bg-white padding-3-half-rem-all lg-padding-2-half-rem-all md-padding-3-half-rem-all">
                                <a href="/news/category/{{ $data->category_id }}" class="blog-category alt-font text-extra-dark-gray border-color-black-transparent bg-white align-self-start margin-4-half-rem-bottom xs-margin-2-half-rem-bottom">{{ $data->category->name }}</a>
                                <a href="/news/{{ $data->id }}" class="text-row-2 font-weight-500 text-large line-height-24px text-extra-dark-gray margin-15px-bottom xs-margin-10px-bottom">{{ $data->getTranslatedAttribute('title') }}</a>
                                <p class="text-row-2">{{ $data->getTranslatedAttribute('excerpt') }}</p>
                                <a href="/news/{{ $data->id }}" class="alt-font font-weight-500 text-small text-fast-blue text-uppercase align-self-start">@lang('texts.more')</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
                    <!-- end blog item -->


                </ul>

            </div>

        </div>
    </div>


    <div class="col-12 d-flex justify-content-center margin-7-half-rem-top md-margin-5-rem-top wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
        {{-- {{ $newslist->render() }} --}}
    </div>

</section>

@stop
