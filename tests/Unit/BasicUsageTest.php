<?php

use PHPUnit\Framework\TestCase;
use DivineOmega\HCLParser\HCLParser;

class BasicUsageTest extends TestCase
{
    public function testBasicParsing()
    {
        $hcl = file_get_contents(__DIR__.'/data/example.tf');
        $configObject = (new HCLParser($hcl))->parse();

        $expected = unserialize(file_get_contents(__DIR__.'/data/example.tf.expected'));

        $this->assertEquals($expected, $configObject);
    }

}
