<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskMoneyNoSymbol;

class MaskMoneyNoSymbolTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaskMoneyNoSymbol()
    {
        $maskMoneyNoSymbol = new MaskMoneyNoSymbol('1234.56');

        $this->assertEquals('1.234,56', $maskMoneyNoSymbol->getMasked());
    }
}
