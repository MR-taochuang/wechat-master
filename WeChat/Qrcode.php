<?php

namespace WeChat;

use Driver\WeChat;

/**
 * Class Qrcode
 * @package WeChat
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/29 14:43
 * 微信二维码管理
 */
class Qrcode extends WeChat{

    /**
     * @param $scene
     * @param int $expire_seconds
     * @return array
     * 创建二维码ticket
     */
    public function QrcodeCreate($scene, $expire_seconds = 0){
        if (is_integer($scene)) {
            $options = ['action_info' => ['scene' => ['scene_id' => $scene]]];
        } else {
            $options = ['action_info' => ['scene' => ['scene_str' => $scene]]];
        }
        if ($expire_seconds > 0) {
            $options['expire_seconds'] = $expire_seconds;
            $options['action_name'] = is_integer($scene) ? 'QR_SCENE' : 'QR_STR_SCENE';
        } else {
            $options['action_name'] = is_integer($scene) ? 'QR_LIMIT_SCENE' : 'QR_LIMIT_STR_SCENE';
        }
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();

    }

    /**
     * @param array $ticket
     * @return mixed
     * 通过ticekt获取url地址
     */
    public function Qrcode($ticket){
        return self::instance(__FUNCTION__)->run(self::$config->set('ticket',$ticket))->toUrl();
    }

    /**
     * @param $long_url
     * @return array
     * 长链接转短链接接口
     */
    public function ShortUrl($long_url){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['action'=>'long2short','long_url'=>$long_url])->toArray();
    }

}