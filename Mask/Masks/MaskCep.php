<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask\Masks;

use Mask\AbstractMask;

/**
 * Class MaskCep
 *
 * @package Mask\Masks
 */
class MaskCep extends AbstractMask
{
    /**
     * @return mixed
     */
    protected function getFormatMask()
    {
        return '#####-###';
    }

}
