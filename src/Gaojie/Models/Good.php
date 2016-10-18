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
 * Description of Good
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-23 19:56 (CST) 
 * @version 0.1
 * @description 
 */
class Gaojie_Models_Good extends Gaojie_Models_Abst implements Gaojie_Models_ToArrIntf {

    protected $notNullFields = array(
        'goods_seq',
        'goods_unit',
        'goods_hg_num',
        'goods_gweight',
        'goods_name',
        'brand',
        'goods_spec',
        'goods_num',
        'goods_price',
        'ycg_code',
        'hs_code',
        'curr',
    );
    protected $nullableFields = array(
        'goods_barcode',
        'goods_ptcode',
        'goods_size',
    );
    protected $bcOptionalNotNullFields = array();

    public function toArray() {
        return $this->content;
    }

}
