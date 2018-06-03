<?php
class sfWidgetFormSpamProtect extends sfWidgetFormInput
{
  public function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);
    $this->setAttribute('id','a_phone');
  }
 
  // public function render($name, $value = null, $attributes = array(), $errors = array())
  // {
    
  //   $result = parent::render($name, $value, $attributes, $errors);
  //   return 
  // }
}