<template>
  <div class="footer">
		<div class="container">

     <div class="row ">

                <!-- footer-links -->
                <div class="col-4 px-5">
                    <div class="footer-widget padding-firstbox">
                        <div class="footer-title">ดูแลลูกค้า</div>
                        <ul class="list-unstyled">
                            <li><router-link :to="{name:''}">ศูนย์ช่วยเหลือ</router-link></li>
                            <li><router-link :to="{name:''}">วิธีการเช่าสินค้า</router-link></li>
							<li><router-link :to="{name:''}">ขั้นตอนการส่งสินค้า</router-link></li>
							<li><router-link :to="{name:''}">นโยบายสินค้า</router-link></li>
							<li><router-link :to="{name:''}">ติดต่อเรา</router-link></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-4 px-5">
                    <div class="footer-widget">
                        <div class="footer-title">เกี่ยวกับ Childrent</div>
                        <ul class="list-unstyled">
                            <li><router-link :to="{name:''}">เกี่ยวกับเรา</router-link></li>
                            <li><router-link :to="{name:''}">นโยบายของ Childrent</router-link></li>
							<li><router-link :to="{name:''}">นโยบายความเป็นส่วนตัว</router-link></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->

                 <!-- footer-links -->
                <div class="col-4 px-5">
                    <div class="footer-widget">
                        <div class="footer-title">รับข่าวสารจาก Childrent</div>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="กรอกอีเมล์ของคุณ">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Go</button>
                            </span>
                        </div><!-- /input-group -->

                    </div>
                </div>
                <!-- /.footer-links -->
            </div>


			<div class="row ">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
					<div class="tiny-footer">
						<p>Childrent © All Rights Reserved 2019</p>
					</div>
				</div>
			</div>
			<!-- /. tiny-footer -->


		</div>
  	</div>
</template>

<script>
export default {

}
</script>

<style scoped>

    .footer { background-color: #343A3C; color: #ffffff; font-weight: 400; font-size: 17px; }
    .padding-firstbox{ padding-left: 20%;}
    .footer-widget { padding-bottom: 30px; padding-top: 30px; }
	.footer-title { font-size: 20px; font-weight: 600; margin-bottom: 15px; color: #fff; }
	.footer-widget ul li a { text-transform: capitalize; font-size: 14px; color: #fff; display: block; font-weight: 200; }
	.footer-widget ul li a:hover { color: #fff; }
	.footer-widget ul li { font-size: 12px;}
    .tiny-footer { font-size: 14px; padding: 23px 0px 10px 0px; font-weight: 600; background-color: #343A3C; border-top: 1px solid #ffffff; line-height: 1; }
    
    
</style>
