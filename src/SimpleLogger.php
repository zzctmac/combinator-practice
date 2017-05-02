<?php
namespace co;

class SimpleLogger implements Logger 
{
    function printInfo($level, $msg)
    {
        echo $msg;
    }
    function println($level, $msg)
    {
        echo $msg . "\n";
    }
    function logException(\Exception $e)
    {
        echo $e->getMessage();
    }
}