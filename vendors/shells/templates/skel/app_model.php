<?php

class AppModel extends Model {

    public $actAs('Senchan.CreateRid');

    public function __construct($id = false, $table = null, $ds = null){
        $this->useDbConfig = !empty($_SERVER['ENVIRONMENT']) ? $_SERVER['ENVIRONMENT'] : 'default';
        parent::__construct($id, $table, $ds);
    }

}

?>
