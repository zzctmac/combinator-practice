<?php
/**
 * User: ZHOUZHICHAO
 * Date: 2017-5-3
 * Time: 14:19
 */

namespace co;


class ErrorMessageLogger implements Logger
{

    /**
     * @var Logger
     */
    private $logger;

    /**
     * ErrorMessageLogger constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }


    function println($level, $msg)
    {
        $this->logger->println($level, $msg);
    }

    function logException(\Exception $e)
    {
        echo $e->getMessage() . PHP_EOL;
    }

    function printInfo($level, $msg)
    {
        $this->logger->printInfo($level, $msg);
    }
}