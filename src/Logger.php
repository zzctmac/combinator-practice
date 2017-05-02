<?php

namespace co;

interface Logger 
{
    function printInfo($level, $msg);
    function println($level, $msg);
    function logException(\Exception $e);
}