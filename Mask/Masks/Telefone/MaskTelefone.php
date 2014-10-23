<?php
/**
 * @copyright (c) 2014, Elemidia
 * @author Italo Domingues <italo.domingues@elemidia.com.br>
 */

namespace Mask\Masks\Telefone;

use Mask\AbstractMask;

class MaskTelefone extends AbstractMask
{
    /**
     * @return mixed
     */
    protected function getFormatMask()
    {
        $maskTelefone10 = new MaskTelefone10($this->value);

        $maskTelefone11 = new MaskTelefone11($this->value);
        $maskTelefone10->setNext($maskTelefone11);

        $maskTelefone110xx = new MaskTelefone110xx($this->value);
        $maskTelefone11->setNext($maskTelefone110xx);

        $maskTelefone120xx = new MaskTelefone120xx($this->value);
        $maskTelefone110xx->setNext($maskTelefone120xx);

        return $maskTelefone10->getMasked();
    }

    /**
     * @return mixed
     */
    public function getMasked()
    {
        return $this->getFormatMask();
    }

}
