@extends('layouts.template')

@section('title')
เว็บแลกเปลี่ยนของรางวัล - Website
@stop

@section('stylesheet')

<style>
    .ps-block__header p {
       color:#000 
    }
    .img-fluid{
        width:100%;
        border-radius:10px;
    }
    .ps-block__content p {
        color:#000 
    }
</style>

@stop('stylesheet')
@section('content')


    <main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li><a href="{{ url('/user_information') }}">Account</a></li>
                    <li>รายละเอียดการแลกเปลี่ยน</li>
                </ul>
            </div>
        </div>

        <section class="ps-section--account" style="background-color: #fff; padding: 100px 0px 200px 0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ps-section__left">
                            <aside class="ps-widget--account-dashboard">
                                <div class="ps-widget__header"><img src="{{ url('assets/img/users/3.jpg') }}" alt="">
                                    <figure>
                                        <figcaption>Hello</figcaption>
                                        <p><a href="#">username@gmail.com</a></p>
                                    </figure>
                                </div>
                                <div class="ps-widget__content">
                                    <ul>
                                        <li><a href="{{ url('account') }}"><i class="icon-user"></i> ข้อมูลบัญชี</a></li>
                                        <li class="active"><a href="{{ url('history') }}"><i class="icon-papers"></i> ประวัติการแลกเปลี่ยน</a></li>
                                        <li><a href="{{ url('logout') }}"><i class="icon-power-switch"></i>ออกจากระบบ</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        
                    <div class="ps-section__right">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Invoice #500884010 -<strong>Successful delivery</strong></h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>ที่อยู่จัดส่ง</figcaption>
                                                <div class="ps-block__content"><strong> นาย John Walker</strong>
                                                    <p>Address: 72-72/1-3 ซอยฉลองกรุง 31 แขวงลำปลาทิว เขตลาดกระบัง กรุงเทพมหานคร 10520 </p>
                                                    <p>Phone: 913-489-1853</p>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>การจัดส่ง</figcaption>
                                                <div class="ps-block__content">
                                                    <p>ไปรษณีย์ไทย: Free</p>
                                                </div>
                                            </figure>
                                            <figure class="ps-block--invoice">
                                                <figcaption>วันที่แลก</figcaption>
                                                <div class="ps-block__content">
                                                    <p>20-01-2022</p>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>เลขพัสุด</figcaption>
                                                <div class="ps-block__content">
                                                    <p>EMS EBXXXXX4405TH</p>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table ps-table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Point</th>
                                                    <th>จำนวน</th>
                                                    <th>Point คงเหลือ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/shop/5.jpg') }}" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="#">Grand Slam Indoor Of Show Jumping Novel</a>
                                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span> 500</span></td>
                                                    <td>1</td>
                                                    <td><span> 700</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/products/shop/6.jpg') }}" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="#">Sound Intone I65 Earphone White Version</a>
                                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span> 500</span></td>
                                                    <td>1</td>
                                                    <td><span> 1,200</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="ps-section__footer"><a class="ps-btn ps-btn--sm" href="#">Back to invoices</a></div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>

        

    </main>


@endsection

@section('scripts')
@stop('scripts')