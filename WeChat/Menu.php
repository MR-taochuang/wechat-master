<?php

namespace WeChat;

use Driver\Tool;
use Driver\WeChat;

/**
 * Class Menu
 * @package WeChat
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/26 13:41
 * 微信菜单处理
 */

class Menu extends WeChat{

    /**
     * @param array $options 菜单参数
     * @return array
     * @throws \Exception
     * 创建微信菜单
     */
    public function CreateMenu(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @return array
     * @throws \Exception
     * 获取微信菜单参数
     */
    public function GetMenu(){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @return array
     * @throws \Exception
     * 删除微信菜单
     */
    public function DeleteMenu(){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 创建个性菜单
     */
    public function CreateConditionalMenu(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 删除个性化菜单
     */
    public function DeleteConditionalMenu(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 测试个性化菜单匹配结果
     */
    public function TryMatch(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @return array
     * @throws \Exception
     * 获取自定义菜单配置接口
     */
    public function GetCurrentSelfmenuInfo(){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }


}