<?php

namespace WeChat;

use Driver\Tool;
use Driver\WeChat;

/**
 * Class Template
 * @package WeChat
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/27 14:34
 * 微信模板消息
 */
class Template extends WeChat{


    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 模板消息设置行业
     */
    public function TemplateSetIndustry(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 获取设置的行业信息
     */
    public function TemplateGetIndustry(){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 获得模板ID
     */
    public function TemplateId(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 获取模板列表
     */
    public function TemplateList(){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 删除模板
     */
    public function TemplateDelete(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     *发送模板消息
     */
    public function TemplateSend(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $ooptions
     * @return array
     * @throws \Exception
     * 通过API推送订阅模板消息给到授权微信用户
     */
    public function SubscribeTemplate(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

}