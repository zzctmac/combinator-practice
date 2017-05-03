<?php
/**
 * User: ZHOUZHICHAO
 * Date: 2017-5-3
 * Time: 14:54
 */

namespace co;


class TimestampLogger implements Logger
{

    /**
     * @var Logger
     */
    private $logger;

    /**
     * TimestampLogger constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }


    function println($level, $msg)
    {
        $this->logger->println($level, date('Y-m-d H:i:s') . ': ' . $msg);
    }

    function logException(\Exception $e)
    {
        $this->logger->printInfo($e->getCode(), date('Y-m-d H:i:s') . ': ');
        $this->logger->logException($e);
    }

    function printInfo($level, $msg)
    {
        $this->logger->printInfo($level, $msg);
    }
}