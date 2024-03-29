<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\Clock;

/**
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
final class Zone implements ZoneInterface
{
    public function __construct(
        private string $name,
        private ZoneOffsetInterface $offset,
    ) {}

    public function __toString(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return $this->name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOffset(): ZoneOffsetInterface
    {
        return $this->offset;
    }
}
