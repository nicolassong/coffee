<?php

namespace services;

use coffee\exception\mysqlError;

class db
{

    private static $db_pool = [];

    public static function connect($conf = 'default')
    {

        if(isset(self::$db_pool[$conf])) return self::$db_pool[$conf];

        //得到对应数据库配置
        $set = config::get($conf,'database');

        if(!$set) throw new mysqlError('mysql config is error.');

        switch($set['driver'])
        {
            case 'mysql':
                $db = new \drives\database\LessQL\Database(new \PDO(
                    "{$set['driver']}:host={$set['host']};port={$set['port']};dbname={$set['database']};charset={$set['charset']}",
                    $set['username'],
                    $set['password']
                ));

                $db->setRewrite( function( $table ) use ($set) {
                    return $set['prefix'] . $table;
                } );

                self::$db_pool[$conf] = $db;
                break;
        }

        if(!isset(self::$db_pool[$conf])) throw new mysqlError('new db object is error.');

        return $db;
    }

    public static function disconnect($conf = 'default')
    {
        unset(self::$db_pool[$conf]);
        return true;
    }
}