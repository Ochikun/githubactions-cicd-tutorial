<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function test_basic_arithmetic(): void
    {
        $this->assertEquals(2,1+1);
    }
}
