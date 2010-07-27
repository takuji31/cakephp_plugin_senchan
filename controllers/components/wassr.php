<?php
/**
 * Wassr Component for CakePHP
 * @author Nishibayashi Takuji
 * @version 1.0
 */
App::import('Lib','HttpSocket');
class WassrComponent extends Object{

    public $controller;
    public $http;
    public $userId;
    public $password;
    const USER_AGENT = 'WassrComponent for CakePHP';
    public static $via = 'Wassr4Cake';
    public static $base_url = 'http://api.wassr.jp';
    public static $api_path = array(
        'public_timeline' => '/statuses/public_timeline.json',
        'friends_timeline' => '/statuses/friends_timeline.json',
        'user_timeline' => '/statuses/user_timeline.json',
        'sl_timeline' => '/statuses/sl_timeline.json',
        'replies' => '/statuses/replies.json',
        'show' => '/statuses/show.json',
        'update' => '/statuses/update.json',
    );

    public function startup($controller){
        
        $this->controller = $controller;
        $this->http = new HttpSocket();

    }


    public function setUserId($id = null){
        if($id){
            $this->userId = $id;
        }
    }


    public function setPassword($password = null){
        if($password){
            $this->password = $password;
        }
    }
    /**
     * POSTメソッドを実行する
     */
    public function request($url,$data,$method,$auth,$auth_method='basic'){
        //リクエストオプションを作成
        $request = array();
        //UAをセット
        $request['header']['User-Agent'] = self::USER_AGENT;
        #認証が必要ならIDとパスをセットする
        if($auth){
            $request['auth']['method'] = 'Basic';
            $request['auth']['user'] = $this->userId;
            $request['auth']['pass'] = $this->password;
        }
        $method = strtolower($method);
        //指定されたメソッドを呼び出してその結果を返す
        return $this->http->$method($url,$data,$request);
    }
    /**
     * APIのRESTURLを取得するメソッド
     */
    public function getApiUrl($service){
        return self::$base_url . self::$api_path[$service];
    }


    public function update($body){
        //本文が空ならエラー
        if(!$body){
            return false;
        }
        $res = json_decode($this->request($this->getApiUrl('update'),array('status'=>$body,'source'=>self::$via),'post',true));
        return $res;
    }


}
