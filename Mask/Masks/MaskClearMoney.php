<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask\Masks;

use Mask\AbstractMask;

/**
 * Class MaskClearMoney
 *
 * Limpa máscara ex.: 1.234,56 para 1234.56
 *
 * @package Mask\Masks
 */
class MaskClearMoney extends AbstractMask
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
        $value = str_replace('.', '', $this->value);
        $value = str_replace(',', '.', $value);

        return $value;
    }
}
