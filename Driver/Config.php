<?php

namespace Driver;

use ArrayAccess;

/**
 * 致谢 Anyon <zoujingli@qq.com>
 * Class Config
 * @package Driver
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/21 15:53
 * 配置项操作
 */
class Config implements ArrayAccess
{

    /**
     * 配置值
     * @var array
     */
    private static $config = [];
    private $api;
    private $param;
    public $data;

    /**
     * Config constructor.
     * @param array $config
     *
     */

    public static function __callStatic($name, $value)
    {
        $name=$name.'ial';
     
       return  self::$name($value);
    }
    public function initial($param){
        echo 1;exit;
        return $this;
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
            return self::$config = array_merge(self::$config, $data);
        }
        return array_merge(self::$config, $data);
    }

    /**
     * 设置配置项值
     * @param string $offset
     * @param string|array|null|integer $value
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            self::$config[] = $value;
        } else {
            self::$config[$offset] = $value;
        }
    }

    /**
     * 判断配置Key是否存在
     * @param string $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset(self::$config[$offset]);
    }

    /**
     * 清理配置项
     * @param string|null $offset
     */
    public function offsetUnset($offset = null)
    {
        if (is_null($offset)) {
            self::$config = [];
        } else {
            unset(self::$config[$offset]);
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
            return self::$config;
        }
        return self::$config[$offset]??null;
    }
    /**
     * @param $api
     * @return $this
     * 微信接口匹配
     */
    public function api($api)
    {
        $this->api = $api;
        return $this;
    }
    /**
     * @param $function
     * 运行方法
     */
    public function run($function=[])
    {
        func_get_args();
        $data = new Api($this->api, self::$config);
        return $data;
    }
}