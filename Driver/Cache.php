<?php

namespace Driver;

/**
 * Class Cache
 * @package Driver
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/21 16:11
 * 缓存处理
 */

class Cache
{
    /**
     * @param $key //存储的索引
     * @param $value //存储的值
     * @param $expired 0表示永久储存 其他为储存时间
     * @throws \Exception
     * 设置缓存
     */
    public static function set($key, $value, $expired = 0)
    {
        $filename = self::create_name($key);
        $content = serialize(['name' => $key, 'value' => $value, 'expired' => intval($expired) === 0 ? 0 : time() + intval($expired)]);
        if (!file_put_contents($filename, $content)) throw new \Exception('local cache error.', '0');
        return true;
    }

    /**
     * @param $key
     * @return string
     * 获取缓存数据
     */
    public static function get($key)
    {
        $filename = self::create_name($key);
        if (!file_exists($filename)) return null;
        $content = file_get_contents($filename);
        if (empty($content)) return null;
        $content = unserialize($content);
        if ($content['expired'] != 0 && intval($content['expired']) < time()) {
            self::delete($filename);
            return null;
        }
        return $content['value'];
    }
    /**
     * @param $key
     * @return bool
     * 删除指定缓存数据
     */
    public static function delete($key)
    {
        return file_exists($key) ? unlink($key) : true;
    }

    /**
     * 清空缓存数据
     */
    public static function clear()
    {
        $data = scandir(self::cache_path(), 0);
        foreach ($data as $key => $value) {
            if ($key > 1) unlink(self::cache_path() . DIRECTORY_SEPARATOR . $value);
        }
    }

    /**
     * @param $name
     * @return string
     * 生成缓存文件名
     */
    protected static function create_name($name)
    {
        return self::cache_path() . md5($name) . '_#' . $name . '#';
    }

    /**
     * @return string
     * 缓存目录
     */
    private static function cache_path()
    {
        $dir=dirname(__DIR__) . DIRECTORY_SEPARATOR  . 'cache' . DIRECTORY_SEPARATOR ;
        if(!is_dir($dir)) mkdir($dir, 0755, true);
        return $dir;
    }

}