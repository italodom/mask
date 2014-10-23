<?php
/**
 * @copyright (c) 2014, Elemidia
 * @author Italo Domingues <italo.domingues@elemidia.com.br>
 */

namespace Mask\Masks\Telefone;

/**
 * Class MaskTelefone110xx
 *
 * @package Mask\Masks\Telefone
 */
class MaskTelefone110xx extends AbstractMaskTelefone
{
    /**
     * @return mixed
     */
    protected function getFormatMask()
    {
        return '(##) ####-####';
    }

    /**
     * @return string
     */
    public function getMasked()
    {
        if (strlen($this->value) === 11 && $this->value[0] == '0') {
            $this->value = substr($this->value, 1, strlen($this->value));

            return parent::getMasked();
        }

        if ($this->next != null) {
            return $this->next->getMasked();
        }

        return $this->value;
    }

}
