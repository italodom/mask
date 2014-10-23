<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskClearMoney;

class MaskClearMoneyTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFormatMask()
    {
        $class = new \ReflectionClass('Mask\Masks\MaskClearMoney');
        $method = $class->getMethod('getFormatMask');
        $method->setAccessible(true);

        $this->assertEquals('1234.56', $method->invoke(new MaskClearMoney('1.234,56')));
    }
}
