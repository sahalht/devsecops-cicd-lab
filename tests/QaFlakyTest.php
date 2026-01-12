<?php
use PHPUnit\Framework\TestCase;

class QaFlakyTest extends TestCase
{
    public function testRandomFailure()
    {
        $this->assertTrue(rand(0, 1) === 1);
    }
}
