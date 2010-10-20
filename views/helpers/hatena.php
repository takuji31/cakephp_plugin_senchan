<?php 
require_once('HatenaSyntax.php');
class HatenaHelper extends Helper{

    public $config = array(
        'superprehandler' => 'spre_prettify',
        'htmlescape' => false,
    );

    public function render($data){
        return $this->output(HatenaSyntax::render($data,$this->config));
    }
}

function spre_prettify($type , Array $lines){
    $body = implode("\n",$lines);
    return "<pre class=\"prettyprint lang-$type\">\n$body\n</pre>";
}
