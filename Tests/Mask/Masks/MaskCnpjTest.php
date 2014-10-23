<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskCnpj;

class MaskCnpjTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaskCpf()
    {
        $maskCnpj = new MaskCnpj('00000000000100');

        $this->assertEquals('00.000.000/0001-00', $maskCnpj->getMasked());
    }
}
