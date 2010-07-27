<?php 
/**
 * 環境ごとにデータソースを変更するビヘイビア
 * @author Nishibayashi Takuji
 */
App::import('Vendor','string_random');
class EnvBehavior extends ModelBehavior {
    
    //保存前だとinsertかupdateかわからない仕様なのです
    function setup(&$model,$config = array()){
        #環境変数によってDB設定を変えるHACK
        #FIXME この走らせ方だとdefaultがないとコケる。
        $config = @$_SERVER['ENVIRONMENT'];
        $db_config = new DATABASE_CONFIG();
        $this->useDbConfig = property_exists($db_config,$config) ? $config : 'default' ;
    }
}
