<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask;

/**
 * Class MaskTypes
 *
 * Tipo de máscaras
 *
 * @package Mask
 */
abstract class MaskTypes
{
    const MASK_CPF = 'cpf';

    const MASK_CEP = 'cep';

    const MASK_MONEY_NO_SYMBOL = 'money_no_symbol';

    const MASK_CLEAR_MONEY = 'clear_mask_money';

    const MASK_TELEFONE = 'telefone';

    const MASK_CNPJ = 'cnpj';
}
