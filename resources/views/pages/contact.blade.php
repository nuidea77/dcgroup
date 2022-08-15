@extends('layout.main')
@section('content')
<section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image: url({{asset('images/DSC07351.JPG')}});">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Contact us</h2>
            </div>
            <div class="down-section text-center"><a href="#down-section" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
</section>
<section class="bg-light-gray overflow-visible pt-md-0">
    <div class="container">
        <div class="z-index-6 position-relative overlap-section-three-fourth bg-white box-shadow-large padding-8-rem-all md-padding-5-rem-all xs-padding-4-rem-tb xs-padding-2-rem-lr wow animate__fadeIn" data-wow-delay="0.4s" style="margin-top: -123.399px; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we'll be in touch soon!</span>
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                </div>
                <div class="col-12">
                    <!-- start contact form -->
                    <form action="email-templates/contact-form.php" method="post" novalidate="">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                            </div>
                            <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                                <textarea class="medium-textarea bg-white h-200px" rows="6" name="comment" placeholder="Your message"></textarea>
                            </div>
                            <div class="col text-start sm-margin-25px-bottom">
                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms &amp; conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                            </div>
                            <div class="col text-center text-md-end">
                                <button id="project-contact-us-button" class="btn btn-medium btn-fast-blue mb-0 submit" type="submit">Send Message</button>
                            </div>
                        </div>
                        <div class="form-results d-none"></div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="col-12 col-lg-10 d-flex flex-row align-items-center justify-content-center text-center margin-7-half-rem-top">
                <span class="col-auto w-40px h-1px bg-dark-gray opacity-3"></span>
                <div class="alt-font font-weight-500 text-large text-extra-dark-gray padding-20px-lr">We like to talk and on the strength of that you are invited for a coffee</div>
                <span class="col-auto w-40px h-1px bg-dark-gray opacity-3"></span>
            </div>
        </div>
    </div>
</section>
<section class="half-section" >
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start feature box item -->
            <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fas fa-map-marker-alt icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">LOCATION</span>
                        <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100">Ulaanbaatar Khan-uul, 15 Khoroo, Zaisan bridge, Tokyo tower</p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fas fa-phone-alt
                        icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Let's Talk</span>
                        <p><a href="tel:+97677475555" class="text-sky-blue-hover"> +976 77475555</a><br><a href="tel:+97677545555" class="text-sky-blue-hover"> +976 77545555</a></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col xs-margin-30px-bottom">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fas fa-envelope icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">E-mail Us</span>
                        <p><a href="mailto:info@dcgroup.mn" class="text-sky-blue-hover">info@dcgroup.mn</a><br><a href="mailto:davaa@dcgroup.mn" class="text-light-blue text-sky-blue-hover">davaa@dcgroup.mn</a></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fab fa-facebook-square icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">FACEBOOK</span>
                        <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100"><a href="https://www.facebook.com/dcgroupinternational" class="text-sky-blue-hover">DC Group International</a></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<section class="p-0 wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container-fluid">
        <div class="row">
            <div class="col h-600px p-0 md-h-450px xs-h-300px">
                <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2675.376840195438!2d106.9104647!3d47.8903911!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe19b61555cfdf80f!2sDCGROUP!5e0!3m2!1sen!2smn!4v1660100430492!5m2!1sen!2smn"></iframe>
            </div>
        </div>
    </div>
</section>
@stop
