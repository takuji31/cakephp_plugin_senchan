<?php 
require_once('HatenaSyntax.php');
class HatenaHelper extends Helper{

    public function render($data){
        return $this->output(HatenaSyntax::render($data));
    }
}
