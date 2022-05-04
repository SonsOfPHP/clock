<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\Clock\Tests;

use SonsOfPHP\Component\Clock\Year;
use SonsOfPHP\Component\Clock\YearInterface;
use PHPUnit\Framework\TestCase;

final class YearTest extends TestCase
{
    public function testItHasTheCorrectInterface(): void
    {
        $year = new Year(2022);

        $this->assertInstanceOf(YearInterface::class, $year);
    }

    public function testToString(): void
    {
        $year = new Year(2022);

        $this->assertSame('2022', $year->toString());
        $this->assertSame('2022', (string) $year);
    }

    public function testToInt(): void
    {
        $year = new Year(2022);

        $this->assertSame(2022, $year->toInt());
    }
}
