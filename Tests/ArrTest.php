<?php
namespace Test;

use Ant\Support\Arr;
use Ant\Support\Collection;

class ArrTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 检查是否是数组或者为实现了ArrayAccess的接口对象
     */
    public function testAccessible()
    {
        $this->assertTrue(Arr::accessible([]));
        $this->assertTrue(Arr::accessible(new Collection()));
        $this->assertFalse(Arr::accessible('foobar'));
        $this->assertFalse(Arr::accessible(new \stdClass()));
    }
}