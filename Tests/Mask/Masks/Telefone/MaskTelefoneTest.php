<?php
/**
 * @copyright (c) 2014, Elemidia
 * @author Italo Domingues <italo.domingues@elemidia.com.br>
 */

namespace Tests\Mask\Masks\Telefone;

use Mask\Masks\Telefone\MaskTelefone;

class MaskTelefoneTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFormatMaskTelefoneDezNumeros()
    {
        $maskTelefone10 = new MaskTelefone('1199999999');

        $this->assertEquals('(11) 9999-9999', $maskTelefone10->getMasked());
    }

    public function testGetFormatMaskTelefoneOnzeNumeros()
    {
        $maskTelefone11 = new MaskTelefone('11999999999');

        $this->assertEquals('(11) 99999-9999', $maskTelefone11->getMasked());
    }

    public function testGetFormatMaskTelefoneDiferente()
    {
        $maskTelefoneQualquer = new MaskTelefone('0119999999990');

        $this->assertEquals('0119999999990', $maskTelefoneQualquer->getMasked());
    }

    public function testGetFormatMaskTelefone110xx()
    {
        $maskTelefone110xx = new MaskTelefone('01199996666');

        $this->assertEquals('(11) 9999-6666', $maskTelefone110xx->getMasked());
    }

    public function testGetFormatMaskTelefone120xx()
    {
        $maskTelefone120xx = new MaskTelefone('011988887777');

        $this->assertEquals('(11) 98888-7777', $maskTelefone120xx->getMasked());
    }

}
