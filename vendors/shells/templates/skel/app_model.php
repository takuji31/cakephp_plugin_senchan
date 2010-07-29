<?php

class AppModel extends Model {

    public $actsAs = array('Senchan.CreateRid');

    public function __construct($id = false, $table = null, $ds = null){
        $env = env('ENVIRONMENT');
        $this->useDbConfig = !empty($env) ? env('ENVIRONMENT') : 'default';
        parent::__construct($id, $table, $ds);
    }

}

?>
