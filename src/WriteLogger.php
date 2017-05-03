<?php
/**
 * User: ZHOUZHICHAO
 * Date: 2017-5-3
 * Time: 14:04
 */

namespace co;


class WriteLogger implements Logger
{

    private $file;

    /**
     * FilerLogger constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }


    function println($level, $msg)
    {
        file_put_contents($this->file, $msg . PHP_EOL, FILE_APPEND);
    }

    function logException(\Exception $e)
    {
        file_put_contents($this->file, $e->getMessage(), FILE_APPEND);
    }

    function printInfo($level, $msg)
    {
        file_put_contents($this->file, $msg , FILE_APPEND);
    }
}