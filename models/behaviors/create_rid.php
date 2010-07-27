<?php 
/**
 * RIDを保存時に作成するビヘイビア
 * ridというフィールドがなければ作成しないようになっているので、とりあえず読み込んでおくのがよさげ
 * @author Nishibayashi Takuji
 */
App::import('Vendor','string_random');
class CreateRidBehavior extends ModelBehavior {
    
    //保存前だとinsertかupdateかわからない仕様なのです
    function afterSave(&$model,$created){
        if($created && isset($model->_schema['rid'])){
            $model->saveField('rid',StringRandom::generate());
        }
    }
}
