<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class sfValidatorSpamProtect extends sfValidatorBase {

    public function configure($options = array(), $messages = array()) 
    {
        $this->addOption('required', false);
        $this->options['required'] = false;
    }

    protected function doClean($values) 
    {
        if($values){
            throw new sfValidatorError($this, 'invalid');
        }
    }

}

?>
