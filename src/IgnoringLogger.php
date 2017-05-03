<?php
/**
 * User: ZHOUZHICHAO
 * Date: 2017-5-3
 * Time: 14:17
 */

namespace co;


class IgnoringLogger implements Logger
{

    /**
     * @var Logger
     */
    private $logger1;

    /**
     * @var Logger
     */
    private $logger2;

    private $lv1;

    /**
     * FilteredLogger constructor.
     * @param Logger $logger1
     * @param Logger $logger2
     * @param $lv1
     */
    public function __construct(Logger $logger1, Logger $logger2, $lv1)
    {
        $this->logger1 = $logger1;
        $this->logger2 = $logger2;
        $this->lv1 = $lv1;
    }


    function println($level, $msg)
    {
        if($level >= $this->lv1)
            $this->logger1->println($level, $msg);
        else
            $this->logger1->println($level, $msg);
    }

    function logException(\Exception $e)
    {
        if($e->getCode() >= $this->lv1)
            $this->logger1->logException($e);
        else
            $this->logger2->logException($e);
    }

    function printInfo($level, $msg)
    {
        if($level >= $this->lv1)
            $this->logger1->printInfo($level, $msg);
        else
            $this->logger1->printInfo($level, $msg);
    }
}