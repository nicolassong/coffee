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

namespace Coffee\Console\Frame;

/* @class Loader
 * @desc  文件载入类
 * @job   载入非自动载入的文件
 * */
class Loader
{

    /* @func file
     * @desc 载入文件
     * @param $file_path <文件路径>
     * @param $return    <是否返回>
     * @return <content or no return>
     * */
    public function file ( $file_path = '' , $return = false )
    {

        $buffer = include( $file_path );

        if($return)
            return $buffer;

        return true;
    }
}