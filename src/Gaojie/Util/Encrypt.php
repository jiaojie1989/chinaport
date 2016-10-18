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
 * Description of Encrypt
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-23 19:45 (CST) 
 * @version 0.1
 * @description 
 */
class Gaojie_Util_Encrypt {

    public static function encrypt($model) {
        $ret = array();
        foreach ($model as $k => $v) {
            switch ($k) {
                case "order":
                    $ret[$k] = base64_encode(base64_encode(json_encode($v->toArray())));
                    break;
                default:
                    $ret[$k] = base64_encode($v);
                    break;
            }
        }
        return $ret;
    }

}
