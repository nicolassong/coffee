<?php

/* +-------------------------------------------------------
 * | Coffee PHP Framework Version 2.0.0                   +
 * +-------------------------------------------------------
 * | Copyright (c) 2017 Coffee All rights reserved.       +
 * +-------------------------------------------------------
 * | Git Link ( https://github.com/naofbear/coffee )      +
 * +-------------------------------------------------------
 * | Author : huakaiquan Email : <huakaiquan@qq.com>      +
 * +-------------------------------------------------------
 * | Licensed(http://www.apache.org/licenses/LICENSE-2.0) +
 * +-------------------------------------------------------
 * | 拒绝臃肿、快速开发、简单上手、即为 Coffee 初心              +
 * | Welcome to join us to make it easier and easier.     +
 * +-------------------------------------------------------
 * */

namespace services;

use Coffee\Console\Structural\Facade;

/* @class interpret
 * @desc  服务模块-语言包类
 * @job   为系统提供语言解析
 * */
class interpret extends Facade
{

    /* @func _getAccessObjectName
     * @desc 通用返回调用的服务名称
     * @return string
     * */
    public static function _getAccessObjectName()
    {
        return 'ServicesInterpret';
    }
}