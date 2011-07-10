<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Validador "Trileano" para el control "Trileano" sfValidatorTrilean, basado
 * en el ejemplo de Thomas Rabaix, en el capítulo "Custom Widgets And Validators"
 * del libro "The More with symphony book"
 * [Ver http://www.symfony-project.org/more-with-symfony/1_4/en/05-Custom-Widgets-and-Validators]
 *
 * @author Guillermo Gutiérrez
 */
class sfValidatorTrilean extends sfValidatorBase {
    
    protected function configure($options = array(), $messages = array())
    {
        $this->addOption('true_values', array('true', 't', 'yes', 'y', 'on', '1'));
        $this->addOption('false_values', array('false', 'f', 'no', 'n', 'off', '0'));
        if ($this->getOption('permite_nulo'))
        {
            $this->addOption('null_values', array('null', null));
        }
    }
 
    protected function doClean($value)
    {
        if (in_array($value, $this->getOption('true_values')))
        {
            return true;
        }

        if (in_array($value, $this->getOption('false_values')))
        {
            return false;
        }

        if ($this->getOption('permite_nulo') && in_array($value, $this->getOption('null_values')))
        {
            return null;
        }

        throw new sfValidatorError($this, 'invalid', array('value' => $value));
    }
 
    public function isEmpty($value)
    {
        return false;
    }
}

?>
