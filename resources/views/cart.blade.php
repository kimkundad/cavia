@extends('layouts.template')

@section('title')
เว็บแลกเปลี่ยนของรางวัล - Website
@stop

@section('stylesheet')

@stop('stylesheet')
@section('content')

    <div class="ps-page--simple">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>

        <div class="ps-section--shopping ps-shopping-cart" style="background-color: #fff;">
            <div class="container">
                <div class="ps-section__header">
                    <h1>Cart</h1>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table--shopping-cart">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>POINT</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="ps-product--cart">
                                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/electronic/1.jpg') }}" alt=""></a></div>
                                            <div class="ps-product__content"><a href="#">Marshall Kilburn Wireless Bluetooth Speaker, Black (A4819189)</a>
                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">205.00</td>
                                    <td>
                                        <div class="form-group--number">
                                            <button class="up">+</button>
                                            <button class="down">-</button>
                                            <input class="form-control" type="text" placeholder="1" value="1">
                                        </div>
                                    </td>
                                    <td>205.00</td>
                                    <td><a href="#"><i class="icon-cross"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="ps-product--cart">
                                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/clothing/2.jpg') }}" alt=""></a></div>
                                            <div class="ps-product__content"><a href="#">Unero Military Classical Backpack</a>
                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">205.00</td>
                                    <td>
                                        <div class="form-group--number">
                                            <button class="up">+</button>
                                            <button class="down">-</button>
                                            <input class="form-control" type="text" placeholder="1" value="1">
                                        </div>
                                    </td>
                                    <td>205.00</td>
                                    <td><a href="#"><i class="icon-cross"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <div class="ps-section__footer">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--shopping-total">
                               
                                <div class="ps-block__content">
                                    
                                    <h3>Total <span>683.49</span></h3>
                                </div>
                            </div><a class="ps-btn ps-btn--fullwidth" href="{{ url('checkout') }}">ดำเนินการถัดไป</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
@stop('scripts')