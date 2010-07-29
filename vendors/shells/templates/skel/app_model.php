<?php

class AppModel extends Model {

    public $actAs('Senchan.CreateRid');

    public function __construct($id = false, $table = null, $ds = null){
        $env = env('ENVIRONMENT');
        $this->useDbConfig = !empty($env) ? env('ENVIRONMENT') : 'default';
        parent::__construct($id, $table, $ds);
    }

}

?>
