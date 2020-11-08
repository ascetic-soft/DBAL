<?php

declare(strict_types=1);

namespace AsceticSoft\DBAL;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatcherAwareInterface
{
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): void;
}
