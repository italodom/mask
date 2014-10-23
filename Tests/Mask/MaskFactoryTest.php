<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Tests\Mask;

use Mask\MaskFactory;
use Mask\MaskTypes;

class MaskFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testFactoryException()
    {
        MaskFactory::factory('nao_existente', 'value');
    }

    /**
     * @dataProvider provider
     */
    public function testFactories($type, $expected)
    {
        $mask = MaskFactory::factory($type, 'value');

        $this->assertInstanceOf($expected, $mask);
    }

    public function provider()
    {
        return array(
            array(MaskTypes::MASK_CEP, 'Mask\Masks\MaskCep'),
            array(MaskTypes::MASK_CPF, 'Mask\Masks\MaskCpf'),
            array(MaskTypes::MASK_CNPJ, 'Mask\Masks\MaskCnpj'),
            array(MaskTypes::MASK_MONEY_NO_SYMBOL, 'Mask\Masks\MaskMoneyNoSymbol'),
            array(MaskTypes::MASK_CLEAR_MONEY, 'Mask\Masks\MaskClearMoney'),
            array(MaskTypes::MASK_TELEFONE, 'Mask\Masks\Telefone\MaskTelefone'),
        );
    }
}
