<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seaFormInputTextDate
 *
 * @author guille
 */
class seaWidgetFormInputTextDate extends sfWidgetFormInputText {
    //put your code here
    public function render($name, $value = null, $attributes = array(), $errors = array())
    {
        //Construyendo el tag HTML input
        $strFormato = '';
        if (array_key_exists('formato', $this->options))
        {
            $strFormato = $this->options['formato'];
        }
        else
        {
            $strFormato = 'd/m/Y';
        }
        $strValor = date($strFormato, strtotime($value));
        $strInput = $this->renderTag('input', array_merge(array('type' => $this->getOption('type'), 'name' => $name, 'value' => $strValor), $attributes));
        
        //Construyendo el tag HTML script, con el javascript necesario
        $strId = '';
        if (array_key_exists('id', $this->attributes))
        {
            $strId = $this->attributes['id'];
        }
        else
        {
            $strId = $this->attributes['id'] = $name.'_id';
        }
        $strScript = '';
        
        $strScript
            = $this->renderContentTag('script',
                           '//alert("hola");
                            new JsDatePick({
                                    useMode:2,
                                    target:"'.$strId.'",
                                    dateFormat:"%d/%m/%Y",
                                    //yearsRange:[1900,2100],
                                    limitToToday:true,
                                    cellColorScheme:"aqua",
                                    weekStartDay:1
                            });',
                    array('id' => $strId.'_date', 'type' => 'text/javascript',)
                );
          
         
        return $strInput.$strScript;
    }
    
    public function getJavaScripts() {
        return array('/js/jsDatePick.min.1.3.js');
    }
    
    public function getStylesheets() {
        return array('jsDatePick_ltr' => 'screen');
    }
}

?>
