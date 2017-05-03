<?php

namespace co;

/**
 * 什么都不做的logger
 * Class NopLogger
 * @package co
 */
class NopLogger implements Logger 
{
    public function __construct()
    {
    }

    function println($level, $msg)
    {

    }

    function logException(\Exception $e)
    {

    }

    function printInfo($level, $msg)
    {
        // TODO: Implement printInfo() method.
    }
}