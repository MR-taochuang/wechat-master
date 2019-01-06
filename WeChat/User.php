<?php

namespace WeChat;

use Driver\Tool;
use Driver\WeChat;

/**
 * Class User
 * @package WeChat
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/27 14:32
 * 微信网页开发授权
 */
class User extends WeChat
{

    /**
     * @param $redirect_uri /授权后重定向的回调链接地址， 请使用 urlEncode 对链接进行处理
     * @param string $scope /应用授权作用域，snsapi_base （不弹出授权页面，直接跳转，只能获取用户openid），snsapi_userinfo （弹出授权页面，可通过openid拿到昵称、性别、所在地。并且， 即使在未关注的情况下，只要用户授权，也能获取其信息 ）
     * @param string $state /重定向后会带上state参数，开发者可以填写a-zA-Z0-9的参数值，最多128字节
     * @return string
     */
    public function UserGetCode($redirect_uri, $scope = 'snsapi_base', $state = 'STATE')
    {
        $url = self::instance(__FUNCTION__)->run(self::$config->set('redirect_uri', urlencode($redirect_uri)), self::$config->set('scope', $scope), self::$config->set('state', $state))->toUrl();
        header('location:' . $url);exit;
    }

    /**
     * @param $code /授权后的code
     * @return array
     * @throws \Exception
     * 获取用户access_token
     */
    public function UserAccessToken($code)
    {
        return self::instance(__FUNCTION__)->run(self::$config->set('code', $code))->get()->toArray();
    }

    /**
     * @param $refresh_token /用于更新access_token
     * @return array
     * @throws \Exception
     * 刷新access_token
     */
    public function RefreshToken($refresh_token)
    {
        return self::instance(__FUNCTION__)->run(self::$config->set('refresh_token', $refresh_token))->get()->toArray();
    }

    /**
     * @param $access_token
     * @param $openid
     * @param string $lang 国家地区语言版本，zh_CN 简体，zh_TW 繁体，en 英语
     * @return array
     * @throws \Exception
     * 微信获取用户信息
     */
    public function UserInfo($access_token, $openid, $lang = 'zh_CN')
    {
        return self::instance(__FUNCTION__)->run(self::$config->set('access_token', $access_token), self::$config->set('openid', $openid), self::$config->set('zh_cn', $lang))->get()->toArray();
    }

    /**
     * @param $access_token
     * @param $openid
     * @return array
     * 检测 微信授权的 access_token 是否过期
     */
    public function CheckAccessToken($access_token, $openid)
    {
        return self::instance(__FUNCTION__)->run(self::$config->set('access_token', $access_token), self::$config->set('openid', $openid))->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 创建用户标签
     */
    public function UserTagsCreate(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @return array
     * 获取公众号已创建的标签
     */
    public function UserTagsGet()
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @return array
     * 编辑标签
     */
    public function UserTagsUpdate(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 删除标签
     */
    public function UserTagsDelete(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @return array
     * 获取标签下粉丝列表
     */
    public function UserTagsFans()
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }


    /**
     * @param array $options
     * @return array
     * 批量为用户打标签
     */
    public function UserTagsMembers(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 批量为用户取消标签
     */
    public function UserTagsUnmembers(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @return array
     * 获取用户身上的标签列表
     */
    public function UserTagslist()
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 设置用户备注名
     */
    public function UserSetRemark(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @return array
     * 获取用户基本信息
     */
    public function UserGetInfo()
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 批量获取用户信息
     */
    public function UserGetInfos(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param $next_openid /下一个openid
     * @return array
     * 获取用户列表
     */
    public function UserGetInfolist($next_openid)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken(), self::$config->set('next_openid', $next_openid))->get()->toArray();
    }

    /**
     * @return array
     * 获取公众号黑名单列表
     */
    public function UserGetBlack()
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @return array
     * 拉黑用户
     */
    public function UserSetBlack(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 取消拉黑用户
     */
    public function UserSetUnblack(array $options)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }
}