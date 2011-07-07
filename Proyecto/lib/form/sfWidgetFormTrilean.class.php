<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Control "Trileano", para el manejo de columnas booleanas que permiten valores
 * nulos, basado en el ejemplo de Thomas Rabaix, en el capítulo
 * "Custom Widgets And Validators" del libro "The More with symphony book"
 * [Ver http://www.symfony-project.org/more-with-symfony/1_4/en/05-Custom-Widgets-and-Validators]
 *
 * @author Guillermo Gutiérrez
 */
class sfWidgetFormTrilean extends sfWidgetFormChoice {

    /**
     * Establece la lista de opciones que presentará el control.
     * @param type $options Opciones para configurar el comportamiento del colntrol.
     * @param type $attributes Atributos HTML para el control.
     */
    public function configure($options = array(), $attributes = array())
    {
        $this->options['choices']
            = array(
                0 => 'No',
                1 => 'Sí',
                'null' => 'No sabe'
            );
        parent::configure();
    }
 
    /*
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $value = $value === null ? 'null' : $value;
 
    $options = array();
    foreach ($this->getOption('choices') as $key => $option)
    {
      $attributes = array('value' => self::escapeOnce($key));
      if ($key == $value)
      {
        $attributes['selected'] = 'selected';
      }
 
      $options[] = $this->renderContentTag(
        'option',
        self::escapeOnce($option),
        $attributes
      );
    }
 
    return $this->renderContentTag(
      'select',
      "\n".implode("\n", $options)."\n",
      array_merge(array('name' => $name), $attributes
    ));
  }
     */
}

?>
