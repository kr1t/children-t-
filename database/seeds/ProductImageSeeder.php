<?php

use Illuminate\Database\Seeder;
use App\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::insert([
            [
                'file_url' => '/images/stroller/yoyoชมพู.jpg',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/stroller/yoyoดำ.jpg',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/stroller/yoyoแดง.jpg',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/stroller/yoyoเทา.jpg',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/stroller/yoyoน้ำตาล.jpg',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/stroller/yoyoฟ้า.jpg',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/stroller/Baby-Jogger-1.jpg',
                'product_id' => 2
            ],
            [
                'file_url' => '/images/stroller/Baby-Jogger-2.jpg',
                'product_id' => 2
            ],
            [
                'file_url' => '/images/stroller/Baby-Jogger-3.jpg',
                'product_id' => 2
            ],
            [
                'file_url' => '/images/stroller/litetrax4-1.jpg',
                'product_id' => 3
            ],
            [
                'file_url' => '/images/stroller/litetrax4-2.jpg',
                'product_id' => 3
            ],
            [
                'file_url' => '/images/stroller/citymini-ดำ.jpg',
                'product_id' => 4
            ],
            [
                'file_url' => '/images/stroller/citymini-ดำ-เทา.jpg',
                'product_id' => 4
            ],
            [
                'file_url' => '/images/stroller/bravoTStrayดำ-1.jpg',
                'product_id' => 5
            ],
            [
                'file_url' => '/images/stroller/bravoTStrayดำ-2.jpg',
                'product_id' => 5
            ],
            [
                'file_url' => '/images/stroller/bravoTStrayดำ-3.jpg',
                'product_id' => 5
            ],
            [
                'file_url' => '/images/stroller/bravoTStrayดำ-4.jpg',
                'product_id' => 5
            ],
            [
                'file_url' => '/images/stroller/doonaดำ.jpg',
                'product_id' => 6
            ],
            [
                'file_url' => '/images/stroller/doonaแดง.jpg',
                'product_id' => 6
            ],
            [
                'file_url' => '/images/stroller/doonaเทา.jpg',
                'product_id' => 6
            ],
            [
                'file_url' => '/images/stroller/doonaฟ้า.jpg',
                'product_id' => 6
            ],
            [
                'file_url' => '/images/stroller/Joie-SMA-Baggi4WD-Flex-Signature.jpg',
                'product_id' => 7
            ],
            [
                'file_url' => '/images/stroller/gracomodes-1.jpg',
                'product_id' => 8
            ],
            [
                'file_url' => '/images/stroller/gracomodes-2.jpg',
                'product_id' => 8
            ],
            [
                'file_url' => '/images/stroller/mini-zip-ดำ.jpg',
                'product_id' => 9
            ],
            [
                'file_url' => '/images/stroller/mini-zip-แดง.jpg',
                'product_id' => 9
            ],
            [
                'file_url' => '/images/stroller/mini-zip-ฟ้า.jpg',
                'product_id' => 9
            ],
            [
                'file_url' => '/images/stroller/mechacalขาว.jpg',
                'product_id' => 10
            ],
            [
                'file_url' => '/images/stroller/mechacalครีม.jpg',
                'product_id' => 10
            ],
            [
                'file_url' => '/images/stroller/mechacalน้ำเงิน.jpg',
                'product_id' => 10
            ],
            [
                'file_url' => '/images/stroller/ready2grow1.jpg',
                'product_id' => 11
            ],
            [
                'file_url' => '/images/stroller/ready2grow2.jpg',
                'product_id' => 11
            ],
            [
                'file_url' => '/images/stroller/ready2grow3.jpg',
                'product_id' => 11
            ],
            [
                'file_url' => '/images/stroller/citilite-rดำ.jpg',
                'product_id' => 12
            ],
            [
                'file_url' => '/images/stroller/citilite-rแดง.jpg',
                'product_id' => 12
            ],
            [
                'file_url' => '/images/stroller/citilite-rน้ำเงิน.jpg',
                'product_id' => 12
            ],
            [
                'file_url' => '/images/stroller/apricaluxฟ้า.jpg',
                'product_id' => 13
            ],
            [
                'file_url' => '/images/stroller/apricaluxแดง.jpg',
                'product_id' => 13
            ],
            [
                'file_url' => '/images/stroller/kuki-twin-ชมพู.jpg',
                'product_id' => 14
            ],
            [
                'file_url' => '/images/stroller/kuki-twin-แดง.jpg',
                'product_id' => 14
            ],
            [
                'file_url' => '/images/stroller/kuki-twin-น้ำเงิน.jpg',
                'product_id' => 14
            ],
            [
                'file_url' => '/images/stroller/oysterMax1.jpg',
                'product_id' => 15
            ],
            [
                'file_url' => '/images/stroller/oysterMax2.jpg',
                'product_id' => 15
            ],
            [
                'file_url' => '/images/stroller/oysterMax3.jpg',
                'product_id' => 15
            ],

            /*
            //คาร์ซีท
            [
                'file_url' => '/images/carseat/B-save35ดำ.jpg',
                'product_id' => 16
            ],
            [
                'file_url' => '/images/carseat/B-save35แดง.jpg',
                'product_id' => 16
            ],
            [
                'file_url' => '/images/carseat/B-save35เทา.jpg',
                'product_id' => 16
            ],
            [
                'file_url' => '/images/carseat/B-save35น้ำตาล.jpg',
                'product_id' => 16
            ],
            [
                'file_url' => '/images/carseat/Ducleเทา.jpg',
                'product_id' => 17
            ],
            [
                'file_url' => '/images/carseat/Ducleฟ้า.jpg',
                'product_id' => 17
            ],
            [
                'file_url' => '/images/carseat/pebbleดำ.jpg',
                'product_id' => 18
            ],
            [
                'file_url' => '/images/carseat/pebbleแดง.jpg',
                'product_id' => 18
            ],
            [
                'file_url' => '/images/carseat/pebbleเทา.jpg',
                'product_id' => 18
            ],
            [
                'file_url' => '/images/carseat/4ever1.jpg',
                'product_id' => 19
            ],
            [
                'file_url' => '/images/carseat/4ever2.jpg',
                'product_id' => 19
            ],
            [
                'file_url' => '/images/carseat/4ever1.jpg',
                'product_id' => 19
            ],
            [
                'file_url' => '/images/carseat/snungride1.jpg',
                'product_id' => 20
            ],
            [
                'file_url' => '/images/carseat/snungride2.jpg',
                'product_id' => 20
            ],
            [
                'file_url' => '/images/carseat/Alibebeดำ.jpg',
                'product_id' => 21
            ],
            [
                'file_url' => '/images/carseat/Alibebeเทา.jpg',
                'product_id' => 21
            ],
            [
                'file_url' => '/images/carseat/AirGroovePlus-1.jpg',
                'product_id' => 22
            ],
            [
                'file_url' => '/images/carseat/AirGroovePlus-2.jpg',
                'product_id' => 22
            ],
            [
                'file_url' => '/images/carseat/AirGroovePlus-3.jpg',
                'product_id' => 22
            ],
            [
                'file_url' => '/images/carseat/Ailebebe-Papatto-1.jpg',
                'product_id' => 23
            ],
            [
                'file_url' => '/images/carseat/Ailebebe-Papatto-2.jpg',
                'product_id' => 23
            ],
            [
                'file_url' => '/images/carseat/Ailebebe-Papatto-3.jpg',
                'product_id' => 23
            ],
            [
                'file_url' => '/images/carseat/Ailebebe-Papatto-4.jpg',
                'product_id' => 23
            ],
            [
                'file_url' => '/images/carseat/Ailebebe-Papatto-5.jpg',
                'product_id' => 23
            ],
            [
                'file_url' => '/images/carseat/alibebe-swingmoonดำ.jpg',
                'product_id' => 24
            ],
            [
                'file_url' => '/images/carseat/alibebe-swingmoonเทา.jpg',
                'product_id' => 24
            ],
            [
                'file_url' => '/images/carseat/Aprica-air-GrooveSTD.jpg',
                'product_id' => 25
            ],
            [
                'file_url' => '/images/carseat/Alibeeb-sarattoดำแดง.jpg',
                'product_id' => 26
            ],
            [
                'file_url' => '/images/carseat/SwingMoon-ดำแดง.jpg',
                'product_id' => 27
            ],
            [
                'file_url' => '/images/carseat/kidfitเทา.jpg',
                'product_id' => 28
            ],
            [
                'file_url' => '/images/carseat/Air-Ride-น้ำตาล.jpg',
                'product_id' => 29
            ],
            [
                'file_url' => '/images/carseat/Graco-Extend2Fit-3-In-1-1.jpg',
                'product_id' => 30
            ],
            [
                'file_url' => '/images/carseat/Graco-Extend2Fit-3-In-1-2.jpg',
                'product_id' => 30
            ],
            [
                'file_url' => '/images/carseat/Graco-Extend2Fit-3-In-1-3.jpg',
                'product_id' => 30
            ],
            [
                'file_url' => '/images/carseat/csjoie1.jpg',
                'product_id' => 31
            ],
            [
                'file_url' => '/images/carseat/csjoie2.jpg',
                'product_id' => 31
            ],
            [
                'file_url' => '/images/carseat/csjoie3.jpg',
                'product_id' => 31
            ],

            */


            //ของเล่น
            [
                'file_url' => '/images/toys/1-0.png',
                'product_id' => 16
            ],
            [
                'file_url' => '/images/toys/1-1.png',
                'product_id' => 16
            ],
            [
                'file_url' => '/images/toys/1-2.png',
                'product_id' => 16
            ],
            [
                'file_url' => '/images/toys/2-0.jpg',
                'product_id' => 17
            ],
            [
                'file_url' => '/images/toys/2-1.jpg',
                'product_id' => 17
            ],
            [
                'file_url' => '/images/toys/3.jpg',
                'product_id' => 18
            ],
            [
                'file_url' => '/images/toys/4-0.jpg',
                'product_id' => 19
            ],
            [
                'file_url' => '/images/toys/4-1.png',
                'product_id' => 19
            ],
            [
                'file_url' => '/images/toys/5.png',
                'product_id' => 20
            ],
            [
                'file_url' => '/images/toys/5-1.png',
                'product_id' => 20
            ],
            [
                'file_url' => '/images/toys/6.png',
                'product_id' => 21
            ],
            [
                'file_url' => '/images/toys/6-1.png',
                'product_id' => 21
            ],
            [
                'file_url' => '/images/toys/7-0.png',
                'product_id' => 22
            ],
            [
                'file_url' => '/images/toys/7-1.png',
                'product_id' => 22
            ],
            [
                'file_url' => '/images/toys/8.jpg',
                'product_id' => 23
            ],
            [
                'file_url' => '/images/toys/9.jpg',
                'product_id' => 24
            ],
            [
                'file_url' => '/images/toys/10.png',
                'product_id' => 25
            ],
            [
                'file_url' => '/images/toys/10-1.png',
                'product_id' => 25
            ],
            [
                'file_url' => '/images/toys/11-1.jpg',
                'product_id' => 26
            ],
            [
                'file_url' => '/images/toys/11-2.png',
                'product_id' => 26
            ],
        ]);
    }
}