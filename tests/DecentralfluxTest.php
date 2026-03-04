<?php
/**
 * Tests for DecentralFlux
 */

use PHPUnit\Framework\TestCase;
use Decentralflux\Decentralflux;

class DecentralfluxTest extends TestCase {
    private Decentralflux $instance;

    protected function setUp(): void {
        $this->instance = new Decentralflux(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decentralflux::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
