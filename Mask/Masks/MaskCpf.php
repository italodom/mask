<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask\Masks;

use Mask\AbstractMask;

/**
 * Class MaskCpf
 *
 * @package Mask\Masks
 */
class MaskCpf extends AbstractMask
{
    /**
     * @return mixed
     */
    protected function getFormatMask()
    {
        return '###.###.###-##';
    }

}
