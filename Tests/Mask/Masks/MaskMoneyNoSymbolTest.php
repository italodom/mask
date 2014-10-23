<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskMoneyNoSymbol;

class MaskMoneyNoSymbolTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFormatMask()
    {
        $class = new \ReflectionClass('Mask\Masks\MaskMoneyNoSymbol');
        $method = $class->getMethod('getFormatMask');
        $method->setAccessible(true);

        $this->assertEquals('1.234,56', $method->invoke(new MaskMoneyNoSymbol('1234.56')));
    }
}
