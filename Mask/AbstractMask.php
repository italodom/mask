<?php
/**
 * @copyright (c) 2014, Italo Domingues
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */

namespace Mask;

/**
 * Class AbstractMask
 *
 * @package Mask
 */
abstract class AbstractMask
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var string
     */
    protected $mask;

    /**
     * @return mixed
     */
    abstract protected function getFormatMask();

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getMasked()
    {
        $val = $this->value;
        $mask = $this->getFormatMask();

        $maskared = '';
        $k = 0;
        for ($i = 0; $i<=strlen($mask)-1; $i++) {
            if ($mask[$i] == '#') {
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }

        return $maskared;
    }
}
