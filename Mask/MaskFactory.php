<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask;

/**
 * Class MaskFactory
 *
 * Fábrica de máscaras
 *
 * @package Mask
 */
class MaskFactory
{
    private static $mapTypes = array(
        MaskTypes::MASK_CEP             => 'Mask\Masks\MaskCep',
        MaskTypes::MASK_CPF             => 'Mask\Masks\MaskCpf',
        MaskTypes::MASK_CNPJ            => 'Mask\Masks\MaskCnpj',
        MaskTypes::MASK_MONEY_NO_SYMBOL => 'Mask\Masks\MaskMoneyNoSymbol',
        MaskTypes::MASK_CLEAR_MONEY     => 'Mask\Masks\MaskClearMoney',
        MaskTypes::MASK_TELEFONE        => 'Mask\Masks\Telefone\MaskTelefone',
    );

    /**
     * @param $type
     * @param $value
     *
     * @return AbstractMask
     */
    public static function factory($type, $value)
    {
        if (isset(self::$mapTypes[$type]) === false) {
            throw new \InvalidArgumentException(sprintf('A máscara "%s" não existe!', $type) );
        }

        $class = self::$mapTypes[$type];

        return new $class($value);
    }

}
