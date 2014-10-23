<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskCep;

class MaskCepTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaskCep()
    {
        $maskCep = new MaskCep('00000111');

        $this->assertEquals('00000-111', $maskCep->getMasked());
    }
}
