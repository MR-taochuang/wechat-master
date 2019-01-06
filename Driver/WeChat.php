<?php

namespace Driver;

/**
 * Class WeChat
 * @package Driver
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/26 13:40
 * 微信基础
 *
 * -----微信集成类----
 *
 * @method  \WeChat\We We($config = []) static 微信基础类
 * @method  \WeChat\Custom Custom($config = []) static 客服消息
 * @method  \WeChat\Kfaccount Kfaccount($config = []) static 客服设置
 * @method  \WeChat\Media Media($config = []) static 素材管理
 * @method  \WeChat\Menu Menu($config=[]) static 菜单管理
 * @method  \WeChat\Template Template($config=[]) static 模板消息
 * @method  \WeChat\User User($config=[]) static 微信用户管理
 * @method  \WeChat\Summary Summary($config=[]) static 微信数据分析
 * @method  \WeChat\Qrcode Qrcode($config=[]) static 二维码管理
 * @method  \WeChat\Card Card($config=[]) static 卡券管理
 *
 */
class WeChat
{
    /**
     * @var array
     * 微信公众号基本参数
     */
    public static $config;

    /**
     * WeChat constructor.
     * @param array $param
     * 获取微信公众号配置信息
     */
    public function __construct($param=[])
    {
        if(!empty($param)) self::$config = new Init($param);
    }

    /**
     * 初始微信请求
     * @param $url
     * @return Init
     */
    public static function instance($url = '')
    {
        return self::$config->registerUrl($url);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws \Exception
     * 静态调取子类
     */
    public static function __callStatic($name, $arguments)
    {
        $class = "\\WeChat\\" . ucfirst(strtolower($name));
        if (class_exists($class)) return new $class($arguments[0]);
        throw new \Exception("Class '{$class}' not found");
    }
    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws \Exception
     * 非静态调取子类
     */
    public function __call($name, $arguments)
    {

        $class = "\\WeChat\\" . ucfirst(strtolower($name));
        if (class_exists($class)) return new $class($arguments[0]);
        throw new \Exception("Class '{$class}' not found");
    }

    /**
     * @return string
     * @throws \Exception
     * 获取access_token
     */
    protected static function GetAccessToken()
    {
        return self::$config->AccessToken();
    }

    protected static function doParam($param){
        foreach ($param as &$value){
            if(isset($value)===false) unset($value);
        }
        return $param;
    }

}