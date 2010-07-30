<?php

class AppModel extends Model {

    public $actsAs = array('Senchan.CreateRid');

    public function __construct($id = false, $table = null, $ds = null){
        $env = env('ENVIRONMENT');
        $this->useDbConfig = $env == 'pub' ? 'pub' : 'default';
        parent::__construct($id, $table, $ds);
    }

}

?>
