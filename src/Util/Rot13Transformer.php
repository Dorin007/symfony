<?php
namespace App\Util;

use Psr\Log\LoggerInterface;

class Rot13Transformer
{
    private $logger;

    /**
     * @required
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    public function transform($value): string
    {
        $this->logger->info('Transforming '.$value);
        // ...
    }
}