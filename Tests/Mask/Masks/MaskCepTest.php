<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskCep;

class MaskCepTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFormatMask()
    {
        $class = new \ReflectionClass('Mask\Masks\MaskCep');
        $method = $class->getMethod('getFormatMask');
        $method->setAccessible(true);

        $this->assertEquals('#####-###', $method->invoke(new MaskCep('123')));
    }
}
