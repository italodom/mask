<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask;

use Mask\MaskTypes;

class MaskTypesTest extends \PHPUnit_Framework_TestCase
{
    public function testTypeCpf()
    {
        /** @var MaskTypes $stub */
        $stub = $this->getMockForAbstractClass('Mask\MaskTypes');

        $this->assertEquals('cpf', $stub::MASK_CPF);
    }

    public function testTypeCep()
    {
        /** @var MaskTypes $stub */
        $stub = $this->getMockForAbstractClass('Mask\MaskTypes');

        $this->assertEquals('cep', $stub::MASK_CEP);
    }

    public function testTypeClearMoney()
    {
        /** @var MaskTypes $stub */
        $stub = $this->getMockForAbstractClass('Mask\MaskTypes');

        $this->assertEquals('clear_mask_money', $stub::MASK_CLEAR_MONEY);
    }

    public function testTypeMoneyNoSymbol()
    {
        /** @var MaskTypes $stub */
        $stub = $this->getMockForAbstractClass('Mask\MaskTypes');

        $this->assertEquals('money_no_symbol', $stub::MASK_MONEY_NO_SYMBOL);
    }
}
