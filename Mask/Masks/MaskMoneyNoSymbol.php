<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask\Masks;

use Mask\AbstractMask;

/**
 * Class MaskMoneyNoSymbol
 *
 * Formata valor ex.: 1234.56 para 1.234,56
 *
 * @package Mask\Masks
 */
class MaskMoneyNoSymbol extends AbstractMask
{
    /**
     * @return string
     */
    public function getMasked()
    {
        return $this->getFormatMask();
    }

    /**
     * @return mixed
     */
    protected function getFormatMask()
    {
        return number_format($this->value, 2, ',', '.');
    }
}
