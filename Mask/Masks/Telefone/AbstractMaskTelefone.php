<?php
/**
 * @copyright (c) 2014, Elemidia
 * @author Italo Domingues <italo.domingues@elemidia.com.br>
 */

namespace Mask\Masks\Telefone;

use Mask\AbstractMask;

abstract class AbstractMaskTelefone extends AbstractMask
{
    /**
     * @var AbstractMask
     */
    protected $next;

    /**
     * @param AbstractMask $next
     */
    public function setNext(AbstractMask $next)
    {
        $this->next = $next;
    }

    /**
     * @return string
     */
    public function getMasked()
    {
        return parent::getMasked();
    }

}
