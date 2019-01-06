<?php

namespace WeChat;

use Driver\Tool;
use Driver\WeChat;

/**
 * Class Media
 * @package WeChat
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/26 18:15
 *微信素材管理
 */
class Media extends WeChat
{




    /**
     * @param $img
     * @param $type
     * @return array
     * @throws \Exception
     * 新增临时素材
     */
    public function MediaUpload($file, $type)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken(), self::$config->set('type', $type))->file($file)->toArray();
    }
    /**
     * @param $media_id
     * @return bool|string
     * @throws \Exception
     * 获取素材
     */
    public function MediaGet($media_id)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken(), self::$config->set('media_id', $media_id))->get()->toArray();
    }

    /**
     * @param $media_id
     * @return bool|string
     * @throws \Exception
     * 更清晰的音频获取素材
     */
    public function MediaGetJssdk($media_id)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken(), self::$config->set('media_id', $media_id))->get()->toArray();
    }

    /**
     * @param $img
     * @return array
     * @throws \Exception
     * 上传图文消息内的图片获取URL
     */
    public function MediaUploadimg($file)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->file($file)->toArray();
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 上传图文消息素材
     */
    public function MediaUploadNews(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 新增永久图文素材
     */
    public function MediaNews(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param $img
     * @param $type
     * @return array
     * @throws \Exception
     * 新增其他素材 分别有图片（image）、语音（voice）、视频（video）和缩略图（thumb）
     */
    public function MediaOther($file, $type)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken(), self::$config->set('type', $type))->file($file)->toArray();
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 获取永久素材
     */
    public function MediaGetMaterial(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 删除永久素材
     */
    public function MediaDeleteMaterial(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 修改永久素材
     */
    public function MediaUpdateMaterial(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @return mixed
     * 获取素材总数
     */
    public function MediaCount()
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 获取素材列表
     */
    public function MediaList(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 打开已群发文章评论
     */
    public function MediaOpenComment(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 关闭已群发文章评论
     */
    public function MediaCloseComment(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 查看指定文章的评论数据
     */
    public function MediaShowComment(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 将评论标记精选
     */
    public function MediaMarkComment(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 将评论取消精选
     */
    public function MediaUnmarkComment(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 删除评论
     */
    public function MediaDeleteComment(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 回复评论
     */
    public function MediaReplyComment(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 删除回复
     */
    public function MediaDeleteReply(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }
}