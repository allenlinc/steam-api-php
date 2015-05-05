<?php

namespace Steam\Command\EconItems;

class GetStoreStatusTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GetStoreStatus
     */
    protected $instance;

    public function setUp()
    {
        $this->instance = new GetStoreStatus(123);
    }

    public function testValues()
    {
        $this->assertEquals('IEconItems_123', $this->instance->getInterface());
        $this->assertEquals('GetStoreStatus', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([], $this->instance->getParams());
    }
}
