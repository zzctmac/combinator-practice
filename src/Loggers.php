<?php
/**
 * User: ZHOUZHICHAO
 * Date: 2017-5-3
 * Time: 15:01
 */

namespace co;


class Loggers
{
    static function nop() {return new NopLogger();}
    static function writer($file) {return new WriteLogger($file);}
    static function filter($logger1, $logger2, $lv) {return new FilteredLogger($logger1, $logger2, $lv);}
    static function ignore($logger1, $logger2, $lv) {return new IgnoringLogger($logger1, $logger2, $lv);}
    static function timestamp($logger) {return new TimestampLogger($logger);}
    static function seq($loggers) {return new SeqLogger($loggers);}
}