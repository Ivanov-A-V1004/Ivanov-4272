<?php

namespace Ivanov;

use core\LogInterface;
use core\LogAbstract;

class MyLog extends LogAbstract implements LogInterface
{
    public static function log($str)
    {
        self::Instance()->_log($str);
    }

    public function _log($str)
    {
        $this->log[] = $str;
    }

    public static function write()
    {
        self::Instance()->_write();
    }
	
	public function _write()
    {
        foreach ($this->log as $value)
            echo $value . "\r\n";
    }
}