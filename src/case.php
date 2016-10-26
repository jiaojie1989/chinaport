<?php

$data['seller_name'] = base64_encode('yirong');
$data['api_key'] = base64_encode('d21861c99868a591cb29e00bbaf26c05');
$data['mark'] = base64_encode('order');
$data['confirm'] = base64_encode('1');
$order = array(
//    "is_bc" => 1, //是否BC订单
//    "re_no" => "", //商家广州备案号
//    "re_no_qg" => "", // 商家全国备案号
//    "re_name" => "", // 商家备案名称
    "order_sn" => "TST" . time(), //订单编号
//    "pweb" => "", //订单网址
//    "web_name" => "", //网址名称
    "pfreight_no" => "99939204605", //总运单号 (null)
    "express_num" => "CHT150509tr66768", //快件单号 (null)
    "express_code" => "",//快递企业代码  当express_num不为空时，必填，否则可空
    "sender_name" => "Zonghai Liang", //发件人姓名
    "sender_city" => "纽约", //发件人城市
    "sender_address" => "6804 NE 79th Ct.", //发件人地址
    "sender_phone" => "40088890788", //发件人电话
    "sender_country_code" => "502", //发件人国别 !!
    "buyer_name" => "小张", //收件人姓名
    "buyer_idcard" => "110102197810250083",// 收件人身份证号码
    "buyer_phone" => "18599770998", //收件人联系电话
    "order_name" => "小明", //订购人姓名
    "order_idcard" => "440102199910250083", //订购人身份证号码
    "order_phone" => "133187899770", //订购人电话
    "order_uname" => "夏天的风", //订购人账户名
    "customs_insured" => "5.66", //保价费
    "customs_discount" => "30", //非现金抵扣金额
    "province_code" => "", //收件人省市区代码 null
    "buyer_address" => "广东省^^^广州市^^^天河区^^^中山大道", //收件人地址 省^^^市^^^区^^^街道^^^具体地址
    "curr" => "502", //币制代码
    "p_name" => "支付宝", //支付企业名称
    "p_no" => "13", //支付号
    "p_time" => "20160503", //支付时间
    "pkg_gweight" => 0.59, //订单总毛重
    "goods_nweight" => 0.19, //订单总净重
    "order_amount" => 100.12, //订单总价  订单所有商品的总价不包含运费与税金
    "order_goods" => array(
        0 => array(
            "goods_seq" => "2", //商品序号 电商平台在全国版申报订单上对应的商品序号
            "goods_size" => "020",// 实际商品计量单位  海关提供的商品计量单位代码
            "goods_unit" => "020",// 商品发定计量单位 海关提供的商品计量单位代码
            "goods_hg_num" => 60, // 商品发定计量单位下的商品数量
            "goods_hg_num2" => 60, //商品第二法定计量单位下的商品数量
            "goods_gweight" => 0.01, //单件商品的重量 KG
            "goods_name" => "综合维生素片",//物品名称
            "brand" => "Centrum",//品牌
            "goods_spec" => "100粒",//规格型号
            "goods_num" => 6,//数量
            "goods_price" => 150,//单价
            "ycg_code" => 502,//原产国代码
            "hs_code" => "1902400000",//商品HS编码 BC必填
            "goods_total" => 900,//商品小计
            "curr" => "",//商品单价币制 可空，为空自动取原产国代码
        ),
        1 => array(
            "goods_seq" => "1",
            "goods_ptcode" => "27000000",
            "goods_size" => "012",
            "goods_unit" => "031",
            "goods_hg_num" => 1,
            "goods_hg_num2" => 1,
            "goods_name" => "牙膏",
            "brand" => "中华",
            "goods_spec" => "50G",
            "goods_num" => 3,
            "goods_price" => 10,
            "ycg_code" => 502,
//            "hs_code" => "2104200000",
            "hs_code" => "1902400000",
            "goods_total" => 30,
        ),
    ),
);

$data['order'] = base64_encode(base64_encode(json_encode($order)));

file_put_contents("../order.json", json_encode($order, JSON_PRETTY_PRINT));

$url = "http://test.cargo100.com/api/index.php?act=order_bc&op=order";
$content_type = "application/x-www-form-urlencoded";

$ctx = array(
    "http" => array(
        "method" => "POST",
        "header" => "Content-Type: {$content_type}\r\n" .
        "User-Agent: Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36\r\n",
        "content" => http_build_query($data),
    ),
);

$ret = file_get_contents($url, false, stream_context_create($ctx));

var_dump(json_decode($ret));
