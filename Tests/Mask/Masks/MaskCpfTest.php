<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskCpf;

class MaskCpfTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFormatMask()
    {
        $class = new \ReflectionClass('Mask\Masks\MaskCpf');
        $method = $class->getMethod('getFormatMask');
        $method->setAccessible(true);

        $this->assertEquals('###.###.###-##', $method->invoke(new MaskCpf('value')));
    }
}
