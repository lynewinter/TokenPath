<?php
/**
 * Tests for TokenPath
 */

use PHPUnit\Framework\TestCase;
use Tokenpath\Tokenpath;

class TokenpathTest extends TestCase {
    private Tokenpath $instance;

    protected function setUp(): void {
        $this->instance = new Tokenpath(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenpath::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
