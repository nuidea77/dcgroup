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
<section id="blog" class="padding-four-lr pt-0 xl-padding-two-lr sm-padding-two-lr xs-no-padding-lr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-metro margin-50px-top blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large" style="position: relative; height: 1299.62px;">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    @if(isset($newslist))
                    @foreach($newslist as $data)
                    <li class="grid-item  wow animate__fadeIn last-paragraph-no-margin" style="position: absolute; left: 50.0002%; top: 324.906px; animation: 0s ease 0s 1 normal none running none;">
                        <div class="blog-post">
                            <div class="blog-post-image bg-dark-slate-blue">
                                <img src="{{Voyager::image($data->image)}}" alt="" data-no-retina="">
                                <div class="blog-overlay"></div>
                            </div>
                            <div class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-3-rem-all">
                                <div class="mb-auto w-100">
                                    <a href="/news/category/{{ $data->category_id }}" class="blog-category alt-font">{{ $data->category->name }}</a>
                                </div>
                                <div class="align-self-end w-100">
                                    <a href="/news/{{ $data->id }}" class="alt-font font-weight-500 text-small d-inline-block text-white text-uppercase opacity-6 margin-10px-bottom">{{ date('d-m-Y', strtotime($data->created_at)) }}</a>
                                    <a href="/news/{{ $data->id }}" class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100">{{ $data->getTranslatedAttribute('title') }}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
                    <!-- end blog item -->
                </ul>
                <!-- start pagination -->
                <div class="col-12  d-flex justify-content-center margin-7-half-rem-top md-margin-5-rem-top wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    {{ $newslist->render() }}
                    {{-- <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right icon-extra-small  d-xs-none"></i></a></li>
                    </ul> --}}
                </div>
                <!-- end pagination -->
            </div>
        </div>
    </div>
</section>
@stop
