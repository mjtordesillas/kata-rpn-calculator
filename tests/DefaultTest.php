<?php

use DefaultNamespace\DefaultClass;

class DefaultTestTest extends \PHPUnit\Framework\TestCase
{
    public function testDefaultClassIsInstantiated()
    {
        $defaultClass = new DefaultClass();

        $this->assertTrue($defaultClass->isInstantiated());
    }

}