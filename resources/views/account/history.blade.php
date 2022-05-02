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
</style>

@stop('stylesheet')
@section('content')


    <main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li><a href="{{ url('/user_information') }}">Account</a></li>
                    <li>ประวัติการแลกเปลี่ยน</li>
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
                                    <h3>ประวัติการแลกเปลี่ยน</h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="table-responsive">
                                        <table class="table ps-table ps-table--invoices">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>วันที่แลก</th>
                                                    <th>สินค้า</th>
                                                    <th>point</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="{{ url('invoice_detail') }}" class="text-primary">500884010</a></td>
                                                    <td>20-1-2022</td>
                                                    <td><a href="{{ url('invoice_detail') }}">รองเท้า อาดิดาส สีขาว, จักรยานไฟฟ้า em3</a></td>
                                                    
                                                    <td>500</td>
                                                    <td class="text-success">จัดสั่งสำเร็จ</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('invoice_detail') }}" class="text-primary">500884009</a></td>
                                                    <td>20-1-2022</td>
                                                    <td><a href="{{ url('invoice_detail') }}">รองเท้า อาดิดาส สีขาว, จักรยานไฟฟ้า em3</a></td>
                                                    
                                                    <td>500</td>
                                                    <td class="text-warning">อยู่ระหว่างการจัดส่ง</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('invoice_detail') }}" class="text-primary">500884008</a></td>
                                                    <td>19-1-2022</td>
                                                    <td><a href="{{ url('invoice_detail') }}">รองเท้า อาดิดาส สีขาว, จักรยานไฟฟ้า em3</a></td>
                                                    
                                                    <td>500</td>
                                                    <td class="text-danger">คืนสินค้า</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('invoice_detail') }}" class="text-primary">500884007</a></td>
                                                    <td>15-1-2022</td>
                                                    <td><a href="{{ url('invoice_detail') }}">รองเท้า อาดิดาส สีขาว, จักรยานไฟฟ้า em3</a></td>
                                                    
                                                    <td>500</td>
                                                    <td class="text-warning">อยู่ระหว่างการจัดส่ง</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('invoice_detail') }}" class="text-primary">500884006</a></td>
                                                    <td>12-1-2022</td>
                                                    <td><a href="{{ url('invoice_detail') }}">รองเท้า อาดิดาส สีขาว, จักรยานไฟฟ้า em3</a></td>
                                                    
                                                    <td>500</td>
                                                    <td class="text-warning">อยู่ระหว่างการจัดส่ง</td>
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

    </main>


@endsection

@section('scripts')
@stop('scripts')