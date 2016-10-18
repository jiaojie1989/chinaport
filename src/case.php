<?php

$data['seller_name'] = base64_encode('yirong');
$data['api_key'] = base64_encode('d21861c99868a591cb29e00bbaf26c05');
$data['mark'] = base64_encode('order');
$data['confirm'] = base64_encode('1');
$order = array(
    "order_sn" => "TST" . time(),
    "pfreight_no" => "99939204605",
    "express_num" => "CHT150509tr66768",
    "sender_name" => "Zonghai Liang",
    "sender_city" => "纽约",
    "sender_address" => "6804 NE 79th Ct.",
    "sender_phone" => "40088890788",
    "sender_country_code" => "502",
    "buyer_name" => "小张",
    "buyer_idcard" => "110102197810250083",
    "buyer_phone" => "18599770998",
    "order_name" => "小明",
    "order_idcard" => "440102199910250083",
    "order_phone" => "133187899770",
    "order_uname" => "夏天的风",
    "customs_insured" => "5.66",
    "customs_discount" => "30",
    "province_code" => "",
    "buyer_address" => "广东省^^^广州市^^^天河区^^^中山大道",
    "curr" => "502",
    "p_name" => "支付宝",
    "p_no" => "13",
    "p_time" => "20160503",
    "pkg_gweight" => 0.59,
    "order_amount" => 100.12,
    "order_goods" => array(
        0 => array(
            "goods_seq" => "2",
            "goods_ptcode" => "01019900",
            "goods_size" => "020",
            "goods_unit" => "020",
            "goods_hg_num" => 60,
            "goods_hg_num2" => 60,
            "goods_name" => "综合维生素片",
            "brand" => "Centrum",
            "goods_spec" => "100粒",
            "goods_num" => 6,
            "goods_price" => 150,
            "ycg_code" => 502,
//            "hs_code" => "2104200000",
            "hs_code" => "1902400000",
            "goods_total" => 900,
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
