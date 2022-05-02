@extends('layouts.template')

@section('title')
เว็บแลกเปลี่ยนของรางวัล - Website
@stop

@section('stylesheet')

@stop('stylesheet')
@section('content')

    <div id="homepage-2">
        <div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" 
            data-owl-auto="true" 
            data-owl-loop="true" 
            data-owl-speed="5000" 
            data-owl-gap="0" 
            data-owl-nav="true" 
            data-owl-dots="true" 
            data-owl-item="1" 
            data-owl-item-xs="1" 
            data-owl-item-sm="1" 
            data-owl-item-md="1" 
            data-owl-item-lg="1"
             data-owl-duration="1000" 
             data-owl-mousedrag="on" 
             data-owl-animate-in="fadeIn" 
             data-owl-animate-out="fadeOut">
                <div class="ps-banner--autopart" ><img src="{{ url('assets/img/slider/autopart/banner-happyweekend-dec.png') }}" alt="" class="img-fluid">
                    
                </div>
                <div class="ps-banner--autopart" ><img src="{{ url('assets/img/slider/autopart/TSM-web-Banner-scangetrich-1920x549.png') }}" alt="" class="img-fluid">
                    
                </div>
            </div>
        </div>
    </div>


    <div class="ps-product-list ps-recommend-for-you mt-30">
            <div class="container">
                <div class="ps-section__header" >
                    <h3>รางวัลยอดนิยม</h3>
                    
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" 
                    data-owl-auto="true" 
                    data-owl-loop="true" 
                    data-owl-speed="10000" 
                    data-owl-gap="30" 
                    data-owl-nav="true" 
                    data-owl-dots="true" 
                    data-owl-item="5" 
                    data-owl-item-xs="2" 
                    data-owl-item-sm="2" 
                    data-owl-item-md="2"
                     data-owl-item-lg="3" 
                     data-owl-item-xl="5" 
                     data-owl-duration="1000" 
                     data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/05.png') }}" alt="" /></a>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="#">Anderson Composites – Custom Hood</a>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">Anderson Composites – Custom Hood</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/06--.png') }}" alt="" /></a>
                               
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="#">Evolution Sport Drilled and Slotted Brake Kit</a>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">Evolution Sport Drilled and Slotted Brake Kit</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/07.png') }}" alt="" /></a>
                                
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="#">Depo Black Housing Tail Lights Frs Brz 86</a>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">Depo Black Housing Tail Lights Frs Brz 86</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/12.png') }}" alt="" /></a>
                               
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="#">Anderson Composites – Custom Hood</a>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">Anderson Composites – Custom Hood</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/10.png') }}" alt="" /></a>
                                
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/14.png') }}" alt=""   /></a>
                                <div class="ps-product__badge hot">hot</div>
                                
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="#">Gibson – Double Skull Exhaust System</a>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">Gibson – Double Skull Exhaust System</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="ps-product-list ps-recommend-for-you mt-40">
            <div class="container">
                <div class="ps-section__header" >
                    <h3>รางวัลสุดพรีเมี่ยม</h3>
                    
                </div>
                <br><br>
                <div class="ps-shopping-product">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/04.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/11.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/13.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/10.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/16.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/17.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/08.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/kim/15.png') }}" alt="" /></a>
                                                    
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Simpson Polymer White Racing Helmet</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ps-pagination">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                        </ul>
                                    </div>

            </div>
        </div>



@endsection

@section('scripts')
@stop('scripts')