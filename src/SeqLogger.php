<?php
/**
 * User: ZHOUZHICHAO
 * Date: 2017-5-3
 * Time: 14:09
 */

namespace co;


class SeqLogger implements Logger
{

    /**
     * @var Logger[]
     */
    private $loggers;

    /**
     * SeqLogger constructor.
     * @param Logger[] $loggers
     */
    public function __construct(array $loggers)
    {
        $this->loggers = $loggers;
    }


    function println($level, $msg)
    {
        foreach ($this->loggers as $logger) {
            $logger->println($level, $msg);

        }
    }

    function logException(\Exception $e)
    {
        foreach ($this->loggers as $logger) {
            $logger->logException($e);

        }
    }

    function printInfo($level, $msg)
    {
        foreach ($this->loggers as $logger) {
            $logger->printInfo($level, $msg);

        }
    }
}