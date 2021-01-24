<?php
namespace App\Service;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerAwareInterface;

class MessageGenerator
{
    private $logger;
    private $loggerAwareInterface;

    public function __construct(LoggerAwareInterface $loggerAwareInterface, LoggerInterface $logger)
    {
        $this->loggerAwareInterface = $loggerAwareInterface;
        $this->logger = $logger;
    }
}