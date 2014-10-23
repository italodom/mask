<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskClearMoney;

class MaskClearMoneyTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaskClearMoney()
    {
        $maskClearMoney = new MaskClearMoney('1.234,56');

        $this->assertEquals('1234.56', $maskClearMoney->getMasked());
    }
}
