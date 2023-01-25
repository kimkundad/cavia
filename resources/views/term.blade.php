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
</style>

@stop('stylesheet')
@section('content')


<div class="ps-page--simple">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>เงื่อนไขแลกของรางวัล</li>
                </ul>
            </div>
        </div>

        <div class="ps-checkout ps-section--shopping" style="background-color: #fff; padding: 100px 0px 200px 0px">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="ps-form__header text-center">
                            <h2> เงื่อนไขแลกของรางวัล</h2>
                        </div>
                        <div class="ps-section__content ">
                            
                            <ul><h5>ผู้มีสิทธิ์ร่วมรายการ</h5>
                                <li>สมาชิกที่เดิมพันกับ CAVIA168 รับคะแนนแลกของรางวัลฟรี</li>
                            </ul>

                            <ul><h5>การสะสมคะแนน CAVIA168 Rewards Points</h5>
                                <li>คะแนนจะคำนวนจาก 2% ของยอดเทิร์นโอเวอร์ทั้งหมดในแต่ละวัน </li>
                            </ul>

                            <ul><h5>อายุของคะแนน</h5>
                                <li>คะแนนสะสม CAVIA168 Rewards Points ไม่มีวันหมดอายุ </li>
                            </ul>

                            <ul><h5>ข้อกำหนดและเงื่อนไข</h5>
                                <li>การแลกรับสินค้าในรายการ CAVIA168 Rewards Points บริษัทฯ จัดขึ้นเพื่อสิทธิประโยชน์ของสมาชิกของทางบริษัทฯเท่านั้น </li>
                                <li>เฉพาะสมาชิก CAVIA168 เท่านั้นที่มีสิทธิ์แลกสินค้า ทั้งนี้สิทธิ์ในการแลกรับสินค้าไม่สามารถโอนให้ผู้อื่นได้ </li>
                                <li> การแลกคะแนน CAVIA168 Rewards Points จะมีผลสมบูรณ์ต่อเมื่อบริษัทฯ ได้รับข้อมูลที่ถูกต้องครบถ้วนแล้วเท่านั้น </li>
                                <li>สินค้าหรือบริการไม่สามารถคืนหรือแลกเปลี่ยนเป็นเงินสดได้ </li>
                                <li>คะแนนที่ใช้ในการแลกรับสินค้าจะถูกหักออกจาก คะแนนสะสมCAVIA168 Rewards Pointsของสมาชิก ในกรณีแลกรับสินค้า คะแนนสะสมของสมาชิกต้องมีจำนวน ไม่น้อยกว่าคะแนนที่ต้องใช้ในการแลกสินค้าหรือบริการนั้นๆ </li>
                                <li>การฉ้อฉล หลอกลวง หรือปลอมแปลงเพื่อให้ได้มาเพื่อคะแนนสะสม CAVIA168 Rewards Points เพื่อแลกรับสินค้าไม่ว่าจะเป็นบางส่วนหรือทั้งหมดนั้นอาจมีผลให้บริษัทฯ พิจารณายกเลิกคะแนนสะสมและ/หรือเรียกคืนสินค้า และเรียกให้ชดใช้คืนค่าบริการและค่าเสียหายใดๆที่เกิดขึ้น </li>
                                <li>บริษัทฯ เป็นเพียงผู้ดำเนินการ ไม่ใช่ผู้จัดจำหน่ายของรางวัลและ/หรือให้บริการ และไม่มีส่วนรับผิดชอบใดๆ ในความชำรุดบกพร่อง ความเสียหาย และการสูญหายของสินค้า อย่างไรก็ตามหากมีปัญหาหรือข้อสงสัยเกี่ยวกับสินค้าหรือต้องการข้อมูลเพิ่มเติม กรุณาติดต่อกับฝ่ายลูกค้าสัมพันธ์ได้ที่ ไลน์ : @ALLCAVIA (มี@) </li>
                                <li>ทางบริษัทสามารถให้ข้อมูลของท่านในส่วนของ ชื่อ-สกุล, ที่อยู่, เบอร์โทรศัพท์ กับผู้จัดจำหน่ายสินค้า เพื่อยืนยันสถานที่และเวลาใน การจัดส่งสินค้าให้กับท่าน เพื่อความสะดวกและถูกต้องในการดำเนินการจัดส่งสินค้า </li>
                                <li>บริษัทฯ ขอสงวนสิทธิ์ในการเปลี่ยนแปลงของรางวัลที่มีมูลค่าเท่ากัน รวมถึงเปลี่ยนแปลงข้อกำหนดและเงื่อนไข โดยไม่ต้องแจ้งให้ทราบล่วงหน้า </li>
                                <li>หากมีข้อโต้แย้งใดๆ เกิดขึ้นเกี่ยวกับรายการ CAVIA168 Rewards Points ให้ถือเอาการตัดสินของบริษัทฯ เป็นที่สิ้นสุด </li>
                            </ul>

                            <ul><h5>การจัดส่งสินค้าหรือบริการ</h5>
                                <li>การดำเนินการจัดส่งสินค้าใช้ระยะเวลาประมาณ 1-2 สัปดาห์ นับจากวันที่บริษัทฯ ได้รับแบบฟอร์ม/คำสั่งการแลกซื้อสินค้า
  </li>
                                <li>กรณีที่ได้มีการจัดส่งสินค้าไปให้สมาชิก ที่อยู่ที่แจ้งไว้ในแบบฟอร์ม/คำสั่งการแลกรับสินค้าหรือบริการและระยะเวลาได้ผ่าน พ้นไปแล้วไม่น้อยกว่า 30 วัน โดยสมาชิกมิได้แจ้งให้บริษัทฯ ทราบเป็น  </li>
                            </ul>
                                <br>
                            <p><b>อย่างอื่น บริษัทฯ จะถือว่าสมาชิกได้รับสินค้าดังกล่าวอย่างถูกต้องครบถ้วนในสภาพเรียบร้อยสมบูรณ์แล้ว
</b></p>
                                    
                        
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


@endsection

@section('scripts')
@stop('scripts')