<template>
  <div class="footer">
        <div class="container">
            <div class="row ">
                <!-- footer-about -->
                <div class="col-4 text-center">
                    <div class="footer-widget">
                        <img src="/images/logo-full2.png" alt="" style="height: 150px; " class="pb-2">
						<ul class="list-unstyled ">
                            <li>Email: contact@childrent.com</li>
                            <li>tel: 081-12345567</li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-about -->
                <!-- footer-links -->
                <div class="col-4 pl-5">
                    <div class="footer-widget">
                        <div class="footer-title">Menu</div>
                        <ul class="list-unstyled">
                            <li><router-link :to="{name:'home'}">หน้าแรก</router-link></li>
                            <li><router-link :to="{name:'products'}">สินค้า</router-link></li>
							<li><router-link :to="{name:''}">รีวิว</router-link></li>
							<li><router-link :to="{name:''}">แพ็กเกจ</router-link></li>
							<li><router-link :to="{name:'howto'}">วิธีการเช่า</router-link></li>
							<li><router-link :to="{name:'about'}">เกี่ยวกับเรา</router-link></li>
                            <li><router-link :to="{name:'contact'}">ติดต่อเรา</router-link></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-4 pl-5">
                    <div class="footer-widget ">
                        <div class="footer-title">แพ็กเกจ</div>
                        <ul class="list-unstyled">
                            <li><router-link :to="{name:''}">วิธีการสมัครแพ็กเกจ</router-link></li>
                            <li><router-link :to="{name:''}">ข้อมูลแพ็กเกจ</router-link></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->

                <!-- tiny-footer -->

            </div>
            
        </div>
    </div>

	
</template>

<script>
export default {

}
</script>

<style scoped>
	.footer { background-color: #f87096; color: #ffffff; font-weight: 400; font-size: 14px; }
	
	.footer-widget { padding-bottom: 30px; padding-top: 50px; }
	.footer-title { font-size: 20px; font-weight: 600; margin-bottom: 15px; color: #fff; }
	.footer-widget ul li a { text-transform: capitalize; font-size: 14px; color: #fff; display: block; font-weight: 200; }
	.footer-widget ul li a:hover { color: #fff; }
	.footer-widget ul li { font-size: 12px;}



</style>
