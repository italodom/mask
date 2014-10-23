<?php
/**
 * @copyright (c) 2014, Elemidia
 * @author Italo Domingues <italo.domingues@elemidia.com.br>
 */

namespace Mask\Masks\Telefone;

/**
 * Class MaskTelefone11
 *
 * @package Mask\Masks\Telefone
 */
class MaskTelefone11 extends AbstractMaskTelefone
{
    /**
     * @return mixed
     */
    protected function getFormatMask()
    {
        return '(##) #####-####';
    }

    /**
     * @return string
     */
    public function getMasked()
    {
        if (strlen($this->value) === 11 && $this->value[0] != '0') {
            return parent::getMasked();
        }

        if ($this->next != null) {
            return $this->next->getMasked();
        }

        return $this->value;
    }

}
