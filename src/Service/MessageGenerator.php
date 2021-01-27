<?php
namespace App\Service;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerAwareInterface;

class MessageGenerator
{
    private $logger;
    private $loggerAwareInterface;
    private $locale;

    public function __construct(LoggerInterface $logger, string $locale)
    {
        $this->logger = $logger;
        $this->locale = $locale;
    }

    public function print()
    {
        die($this->locale);
    }
}