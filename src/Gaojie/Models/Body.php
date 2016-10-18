<?php

/*
 * Copyright (C) 2016 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2016-09-23.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

/**
 * Description of Body
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-23 19:57 (CST) 
 * @version 0.1
 * @description 
 */
class Gaojie_Models_Body {

    const SELLER_NAME = "yirong";
    const API_KEY = "d21861c99868a591cb29e00bbaf26c05";

    public static function getOrderBody(Gaojie_Models_Abst $orderDetail) {
        return array(
            "seller_name" => self::SELLER_NAME,
            "api_key" => self::API_KEY,
            "mark" => "order",
            "confirm" => "",
            "order" => $orderDetail,
        );
    }

}
