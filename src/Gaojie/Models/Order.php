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
 * Description of Order
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-23 19:55 (CST) 
 * @version 0.1
 * @description 
 */
class Gaojie_Models_Order extends Gaojie_Models_Abst implements Gaojie_Models_ToArrIntf {

    protected $notNullFields = array(
        "order_sn",
        "sender_name",
        "sender_city",
        "sender_address",
        "sender_phone",
        "sender_country_code",
        "buyer_name",
        "buyer_idcard",
        "buyer_phone",
        "buyer_address",
        "curr",
        "re_no",
        "re_no_qg",
    );
    protected $nullableFields = array(
        "is_bc",
        "pfreight_no",
        "express_num",
        "order_name",
        "order_idcard",
        "order_phone",
        "customs_insured",
        "customs_discount",
        "order_uname",
        "province_code",
        "p_name",
        "p_no",
        "p_time",
        "sh_fee",
        "cus_tax",
        "pweb",
        "web_name",
        "re_name",
    );
    protected $bcOptionalNotNullFields = array(
        "is_bc",
        "order_name",
        "order_idcard",
        "order_phone",
        "customs_insured",
        "customs_discount",
        "p_name",
        "p_no",
        "p_time",
        "pweb",
        "web_name",
        "re_name",
    );
    protected $content = array();

    public function toArray() {
        if (!isset($this->content["order_goods"])) {
            throw new Gaojie_Errors_RuntimeErr("order_goods not set");
        } else {
            foreach ($this->content["order_goods"] as $k => $v) {
                $this->content["order_goods"][$k] = $v->toArray();
            }
        }
        return $this->content;
    }

    public function __set($name, $value) {
        $this->content[$name] = $value;
    }

    public function __get($name) {
        if (isset($this->content[$name])) {
            return $this->content[$name];
        } else {
            return null;
        }
    }

}
