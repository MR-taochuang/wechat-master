<?php

namespace Driver;

use ArrayAccess;

/**
 * Class Config
 * @package Driver
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/21 15:53
 * 微信初始
 */
class Init implements ArrayAccess
{

    /**
     * 配置值
     * @var array
     */
    public $config = [];
    protected $reserved_api=[];

    public function __construct($param)
    {
        $this->config = $param;
    }

    /**
     * 设置配置项值
     * @param string $offset
     * @param string|array|null|integer $value
     */
    public function set($offset, $value)
    {
        $this->offsetSet($offset, $value);
        return true;
    }

    /**
     * 获取配置项参数
     * @param string|null $offset
     * @return array|string|null
     */
    public function get($offset = null)
    {
        return $this->offsetGet($offset);
    }

    /**
     * 合并数据到对象
     * @param array $data 需要合并的数据
     * @param bool $append 是否追加数据
     * @return array
     */
    public function merge(array $data, $append = false)
    {
        if ($append) {
            return $this->config = array_merge($this->config, $data);
        }
        return array_merge($this->config, $data);
    }

    /**
     * 设置配置项值
     * @param string $offset
     * @param string|array|null|integer $value
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->config[] = $value;
        } else {
            $this->config[$offset] = $value;
        }
    }

    /**
     * 判断配置Key是否存在
     * @param string $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->config[$offset]);
    }

    /**
     * 清理配置项
     * @param string|null $offset
     */
    public function offsetUnset($offset = null)
    {
        if (is_null($offset)) {
            $this->config = [];
        } else {
            unset($this->config[$offset]);
        }
    }

    /**
     * 获取配置项参数
     * @param string|null $offset
     * @return array|string|null
     */
    public function offsetGet($offset = null)
    {
        if (is_null($offset)) {
            return $this->config;
        }
        return $this->config[$offset]??null;
    }

    /**
     * @param $api
     * @return $this
     * 微信请求地址注入
     */
    public function registerUrl($api)
    {
        if(!empty($api)) $this->reserved_api[$api]=$api;
        return $this;
    }

    /**
     * @return Api
     * 可执行闭包操作
     */
    public function run()
    {

        $func=func_get_args();
        $function = end($func);
        if(is_object($function)) $this->config['run']=$function($this,$func);
        $api=end($this->reserved_api);
        unset($this->reserved_api[$api]);
        $data = new Api($api, $this->config);
        return $data;
    }

    public function AccessToken()
    {
        $access_token = Cache::get('AccessToken');
        if (isset($access_token)) {
            $this->config['access_token']=$access_token;
            self::set('access_token', $access_token);
            return $access_token;
        } else {
            $res = self::registerUrl('AccessToken')->run()->get()->toArray();
            if (!empty($res['access_token'])) {
                Cache::set('AccessToken', $res['access_token'], 7000);
                self::set('access_token', $res['access_token']);
                $this->config['access_token']=$res['access_token'];
                return $res['access_token'];
            } else{
                throw new \Exception($res['access_token']);
            }
        }
    }
}