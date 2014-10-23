<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask\Masks;

use Mask\Masks\MaskCpf;

class MaskCpfTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaskCpf()
    {
        $maskCpf = new MaskCpf('33344455566');

        $this->assertEquals('333.444.555-66', $maskCpf->getMasked());
    }
}
