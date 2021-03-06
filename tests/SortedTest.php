<?php

declare(strict_types=1);

namespace ElegantBro\Arrayee\Tests;


use ElegantBro\Arrayee\Just;
use ElegantBro\Arrayee\Sorted;
use Exception;
use PHPUnit\Framework\TestCase;

final class SortedTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testAsStringNatSort(): void
    {
        $this->assertEquals(
            [
                3 => 'img1.png',
                2 => 'img2.png',
                1 => 'img10.png',
                0 => 'img12.png',
            ],
            (new Sorted(
                new Just(['img12.png', 'img10.png', 'img2.png', 'img1.png']),
                'strnatcmp'
            ))->asArray()
        );
    }
}