<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask\Masks;

use Mask\AbstractMask;

/**
 * Class MaskCnpj
 *
 * @package Mask\Masks
 */
class MaskCnpj extends AbstractMask
{
    /**
     * @return mixed
     */
    protected function getFormatMask()
    {
        return '##.###.###/####-##';
    }

}
