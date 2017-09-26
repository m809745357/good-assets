<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('configs')->delete();
        
        \DB::table('configs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'logo',
                'value' => 'images/logo.png',
                'description' => 'Logo',
                'created_at' => '2017-09-25 17:52:12',
                'updated_at' => '2017-09-26 09:51:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'address',
                'value' => '浙江省杭州市拱墅区祥园路88号智慧信息产业园M座10楼',
                'description' => '联系地址',
                'created_at' => '2017-09-25 18:47:02',
                'updated_at' => '2017-09-26 10:11:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'mobile',
                'value' => '400-125-2366',
                'description' => '联系方式',
                'created_at' => '2017-09-25 18:53:12',
                'updated_at' => '2017-09-26 10:00:28',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'email',
                'value' => 'sjx@163.com',
                'description' => '邮箱地址',
                'created_at' => '2017-09-25 18:54:45',
                'updated_at' => '2017-09-26 10:11:09',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'weixinpay',
                'value' => 'images/wechat.png',
                'description' => '公众号二维码',
                'created_at' => '2017-09-26 09:57:27',
                'updated_at' => '2017-09-26 10:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'alipay',
                'value' => 'images/pay.png',
                'description' => '支付宝二维码',
                'created_at' => '2017-09-26 09:57:43',
                'updated_at' => '2017-09-26 10:00:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'project',
                'value' => 'images/money.png',
                'description' => '<p>现阶段汽车已经普及，是千家万户的必备固定资产之一，客户资料室大数据的重要组成部分，汽车变现快，购销流动性强，该行业是目前金融行业必争之地。杭州忧合资产管理有限公司以投资整合二手车行业为切入口，策划对接英豪、信托、基金、保险、证券等金融机构，首批以全国二手车车商和二手车企业为共同发起人，筹建霍尔果斯股权投资股份有限公司（注册地：霍尔果斯）线上线下相结合的金融平台。进一步以普惠金融的思想，用传感技术‘视频识别技术、无线网罗技术和嵌入式设备技术等核心科技打造具有互联网基因的股权投资平台</p>',
                'created_at' => '2017-09-26 10:06:34',
                'updated_at' => '2017-09-26 10:06:34',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'latitude',
                'value' => '120.102582',
                'description' => '经度',
                'created_at' => '2017-09-26 10:21:55',
                'updated_at' => '2017-09-26 10:21:55',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'longitude',
                'value' => '30.30033',
                'description' => '<p>纬度</p>',
                'created_at' => '2017-09-26 10:22:24',
                'updated_at' => '2017-09-26 10:22:24',
            ),
        ));
        
        
    }
}