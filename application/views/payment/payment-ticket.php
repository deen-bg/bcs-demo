<div class="banner-wrapper has_background">
    <!-- <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img"> -->
    <div class="banner-wrapper-inner">
        <!-- <h1 class="page-title container">แจ้งชำระเงิน</h1> -->
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs container">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>แจ้งชำระเงิน</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kobolg">
                        <form class="track_order">
                        <div class="kobolg-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                    แจ้งชำระเงิน</h3>
                    <p>แบบฟอร์มแจ้งหลักฐานการชำระเงิน เฉพาะลูกค้าที่เลือกการชำระเงินด้วยวิธีการโอนเงินผ่านธนาคาร และผ่านอีวอลเล็ตเท่านั้น</p>
                </div>
                <!-- payment-ticket -->
                <div style="text-align: center;">
                    <img class="img-responsive"src="<?=base_url('assets/img/payment-ticket/bankokba.png');?>" alt="Gaming Headphone" width="270" height="350">
                    <img class="img-responsive" src="<?=base_url('assets/img/payment-ticket/kbank.png');?>" alt="Gaming Headphone" width="270" height="350">                
                 </div>                                    
                            <!-- end payment-ticket -->
                            <p class="form-row form-row-first"><label for="orderid">เลขคำสั่งซื้อ*</label> <input class="input-text" type="text" name="orderid" id="orderid" value="" >  </p>
                            <p class="form-row form-row-last"><label for="order">ชื่อที่ใช้สั่งซื้อ*</label><input class="input-text" type="text" name="order" id="order" value="" ></p>
                            <p class="form-row form-row-first"><label for="orderid_email">อีเมลล์*</label> <input class="input-text" type="text" name="orderid_email" id="orderid_email" value="" >  </p>
                            <!-- <p class="form-row form-row-last"><label for="order_email">จำนวนเงิน</label><input class="input-text" type="text" name="order_email" id="order_email" value="" ></p> -->
                            <p class="form-row form-row-last"><label for="order_money">จำนวนเงิน*</label><input class="input-text" type="text" name="order_money" id="order_money" value="" ></p>
                            <p class="form-row form-row-last"><label for="order_transfer">วิธีที่โอนเข้ามา*</label><input class="input-text" type="text" name="order_transfer" id="order_transfer" value="" ></p>
                            <p class="form-row form-row-last"><label for="order_accountnumber ">เลขบัญชีของคุณ 4 ตัวท้าย (ไม่มีกรอก 0000)*</label><input class="input-text" type="text" name="order_accountnumber" id="order_accountnumber" value="" ></p>

                            
                                <div class="clear"></div>
                                <p class="form-row">
                                    <button type="submit" class="button" name="track" value="Track">ส่งข้อมูล</button>
                                </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="<?=base_url('assets/js/jquery-1.12.4.min.js');?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?=base_url('assets/js/chosen.min.js');?>"></script>
<script src="<?=base_url('assets/js/countdown.min.js');?>"></script>
<script src="<?=base_url('assets/js/jquery.scrollbar.min.js');?>"></script>
<script src="<?=base_url('assets/js/lightbox.min.js');?>"></script>
<script src="<?=base_url('assets/js/magnific-popup.min.js');?>"></script>
<script src="<?=base_url('assets/js/slick.js');?>"></script>
<script src="<?=base_url('assets/js/jquery.zoom.min.js');?>"></script>
<script src="<?=base_url('assets/js/threesixty.min.js');?>"></script>
<script src="<?=base_url('assets/js/jquery-ui.min.js');?>"></script>
<script src="<?=base_url('assets/js/mobilemenu.js');?>"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="<?=base_url('assets/js/functions.js');?>"></script>
</body>
</html>