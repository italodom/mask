<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask;

class AbstractMaskTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $stub = $this->getMockForAbstractClass('Mask\AbstractMask', array('param'));

        $this->assertAttributeEquals('param', 'value', $stub);
    }

    public function testGetMasked()
    {
        $stub = $this->getMockForAbstractClass('Mask\AbstractMask', array('param'));
        $stub->expects($this->any())
            ->method('getFormatMask')
            ->will($this->returnValue('123'));

        $this->assertEquals('123', $stub->getMasked());
    }
}
