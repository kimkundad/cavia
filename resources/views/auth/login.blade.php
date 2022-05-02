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
    .ps-section__content p {
        color:#000 
    }
    .ps-section__desc p{
        color:#000 
    }
    .ps-my-account-2 .ps-section__desc {
    border-bottom: 1px solid #eaeaea;
    margin-bottom: 0px;
    padding-bottom: 10px;
}
</style>

@stop('stylesheet')
@section('content')


<div class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li> เข้าสู่ระบบ</li>
                </ul>
            </div>
        </div>
        <div class="ps-my-account-2" style="background-color: #fff; padding: 100px 0px 200px 0px">
            <div class="container">
                <div class="ps-section__wrapper">
                    <div class="ps-section__left">
                        <form class="ps-form--account ps-tab-root" >
                            
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="sign-in">
                                    <div class="ps-form__content">
                                        <div class="text-center">
                                            <img src="{{ url('assets/img/LOGO-CV-Line-Orange-Black-01.png') }}" style="height:150px">
                                            <br><br>
                                            <h5>เข้าสู่ระบบบัญชีของคุณ</h5>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Username or email address">
                                        </div>
                                        <div class="form-group form-forgot">
                                            <input class="form-control" type="text" placeholder="Password"><a href="">ลืมรหัส?</a>
                                        </div>
                                        <div class="form-group">
                                            <div class="ps-checkbox">
                                                <input class="form-control" type="checkbox" id="remember-me" name="remember-me">
                                                <label for="remember-me">จดจำฉันไว้ในระบบ</label>
                                            </div>
                                        </div>
                                        <div class="form-group submit">
                                            <button class="ps-btn ps-btn--fullwidth">เข้าสู่ระบบ</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    <div class="ps-section__right">
                        <figure class="ps-section__desc">
                            <figcaption>Sign up today and you will be able to:</figcaption>
                            <p>MartFury Buyer Protection has you covered from click to delivery. Sign up or sign in and you will be able to:</p>
                            <ul class="ps-list">
                                <li><i class="icon-credit-card"></i><span>SPEED YOUR WAY THROUGH CHECKOUT</span></li>
                                <li><i class="icon-clipboard-check"></i><span>TRACK YOUR ORDERS EASILY</span></li>
                                <li><i class="icon-bag2"></i><span>KEEP A RECORD OF ALL YOUR PURCHASES</span></li>
                            </ul>
                        </figure>
                        <img src="{{ url('assets/img/11816049876282.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
       

    </div>


@endsection

@section('scripts')
@stop('scripts')